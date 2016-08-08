<?php 
	
	namespace AppBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Symfony\Component\HttpFoundation\Response;

	/**
	* 
	*/
	class MailingController extends Controller
	{

		/**
		 * @Route("/mailing/{codeSchedule}/{schedule}", name="mailing" )
		 */
		public function ScheduledEmailAction ($codeSchedule, $schedule)
		{

			//query code and scheduled in database/table of schedules
			$Schedule = $this->getDoctrine()->getRepository('AppBundle:ScheduledReports')->findOneBy(array('idScheduledReport'=>$codeSchedule, 'schedule' => $schedule, 'active' => 1));

			$mm = $this->get('app.mailer');

			//Validate then send email or report error to admin
			if ($Schedule) 
			{
				$time = new \DateTime();
				$time2 = new \DateTime();
				$time2 = $time2->sub(new \DateInterval('P7D'));
				$user = $Schedule->getIdUser();

				$em = $this->getDoctrine()->getManager();
				$dql = "SELECT n FROM AppBundle:NotificationsAlert n JOIN n.idMonitoringEvent e JOIN e.idMeasurement m WHERE n.idUser = ".$user->getId()." AND DATE_DIFF(CURRENT_TIMESTAMP(), m.date) < 2 ";
				//$dql = "SELECT n FROM AppBundle:NotificationsAlert n JOIN n.idMonitoringEvent e JOIN e.idMeasurement m WHERE n.idUser = ".$user->getId()." AND DATE_DIFF(".$time.", m.date) < 2 ";
				$query = $em->createQuery($dql);
				$notif = $query->getResult();

				$info = array();
				//$info['not'] = 
				$risk = $danger = 0;
				foreach ($notif as $n) 
				{
					$event = $n->getIdMonitoringEvent();
					if ($event->getIdEventType()->getAlertType() == 'risk') 
					{
					 	$risk++;
					} else 
					{
					 	$danger++;
					}

					$station = $event->getIdBlockSensor()->getIdBlock();
					$dql = "SELECT p FROM AppBundle:Blocks p WHERE p.idBlock = ".$station->getIdParentBlock();
					$query = $this->createQuery($dql);
					$process = $query->getSingleResult();

					$info[] = array("ev"=>$event, "st"=>$station, "pr"=>$process);
					  
				}

				$data = array("user"=>$user, "from"=>$time2, "to"=>$time, "numDanger"=>$danger, "numRisk"=>$risk, "info"=>$info);

				# Call mailer service to generate and send email
				return new Response( $mm->sendEmail($user->getEmail(), $data, "Reporte Semanal", "wr".$Schedule->getTemplate()));

		    	return new Response('<html><body>Email to '.$user->getEmail().' sent!</body></html>', Response::HTTP_OK);

				//return new Response('<html><body>Email '.$type.' send!</body></html>', Response::HTTP_OK);

			} else 
			{

				# Email Report to admin

				$mm->sendEmail();

				return new Response('<html><body>Email FAIL to send!</body></html>', Response::HTTP_OK);

			}
		}
	}

?>