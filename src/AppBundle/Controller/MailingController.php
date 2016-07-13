<?php 
	
	namespace AppBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Symfony\Component\HttpFoundation\Response;
	/*use UserBundle\Entity\Currentattendance;
	use UserBundle\Entity\Users;
	use UserBundle\Entity\Regattendance;
*/
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

			//Validate then send email or report error to admin
			if ($Schedule) 
			{

				$user = $Schedule->getIdUser();
				/*$mailer->send("beenelvi.godoy@gmail.com", $info);*/

				$em = $this->getDoctrine()->getManager();
				$dql = "SELECT n FROM AppBundle:NotificationsAlert n JOIN n.idMonitoringEvent e JOIN e.idMeasurement m WHERE n.idUser = ".$user->getIdUser()." AND DATE_DIFF(CURRENT_TIMESTAMP(), m.date) < 2 ";
				$query = $em->createQuery($dql);
				$notif = $query->getResult();

				$info = array();
				$risk = $danger = 0;
				foreach ($notif as $n) 
				{
					$event = $n->getIdMonitoringEvent();
					if ($event>getIdEventType()->getAlertType() == 'risk') 
					{
					 	$risk++;
					} else 
					{
					 	$danger++;
					}

					$station = $event->getIdBlockSensor()->getIdBlock();
					$dql = "SELECT p FROM AppBundle:Blocks p WHERE p.idBlock = ".$station->getIdParentBlock();
					$query = $this->createQuery($dql);
					$process = $query->getResult()[0];

					$info[] = array("ev"=>$event, "st"=>$station, "pr"=>$process);
					  
				}

				$data = array("numDanger"=>$danger, "numRisk"=>$risk, "info"=>$info);

				$message = \Swift_Message::newInstance()
		        ->setSubject('Hello Email')
		        ->setFrom('juan.basilio@waposat.com')
		        ->setTo($user->getEmail())
		        ->setBody(
		            $this->renderView(
		                "Email/".$Schedule->getTemplate().'.html.twig',
		                array('info' => $data)
		            ),
		            'text/html'
		        )
		    	;
		    	$this->get('mailer')->send($message);
		    	return new Response('<html><body>Email to '.$user->getEmail().' sent!</body></html>', Response::HTTP_OK);


				# Call mailer service to generate and send email

				/*$mailer = $this->get('app.mailer');
				$mailer->generteMessage($programmedSchedule);
				$mailer->send();
				*/
				//return new Response('<html><body>Email '.$type.' send!</body></html>', Response::HTTP_OK);

			} else 
			{

				# Email Report to admin

				/*$mailer = $this->get('app.mailer');
				$mailer->send();*/

				return new Response('<html><body>Email FAIL to send!</body></html>', Response::HTTP_OK);

			}
		}
	}

?>