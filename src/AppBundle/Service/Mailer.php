<?php 

	namespace AppBundle\Service;
	use Doctrine\ORM\EntityManager;
	use Doctrine\ORM\Query;

	/**
	* Allows to you to generate and send any email that you need in the application
	*/
	class Mailer
	{

		private $entityManager;

		public function __construct(EntityManager $entityManager)
		{
			$this->entityManager = $entityManager;
		}


		private $scheduled;
		private $template;
		private $message;

		/***algoritmo de busqueda

			(objeto) user <- idUser <- Scheduled
			(array objetos) bloques_monitoreo <- user
			(array objetos) eventos <- bloque de monitoreo

		***/

		/*public function generateMessage(UserInterface $programmedScheduled)
		{
			
			# Find adress information of the user to send
			
			//Find User
			$user = $this->getDoctrine()->getRepository('UserBundle:Users')->findOneBy(array('uid'=>$id_usuario));

			$bloqueMonitoreo = $this->getDoctrine()->getRepository('UserBundle:Regattendance')->find(array('idUser' => $user->getId()));
			
			for ($i=0; $i < count($bloqueMonitoreo); $i++) 
			{ 
				$em = $this->getDoctrine()->getManager();
        		$query = $em->createQuery('SELECT r FROM UserBundle:Regattendance r ORDER BY r.id DESC');
        		$register = $query->getResult();
			}

			
			$events = $this->getDoctrine()->getRepository('UserBundle:Events')->find(array('id'));




			$this->message = \Swift_Message::newInstance()
			        ->setSubject($programmedScheduled->getSubject())
			        ->setFrom('reporte@waposat.com')
			        ->setTo($user->getEmail())
			        ->setBody(
			            $this->renderView(
			                'UserBundle:Emails:alert.html.twig',
			                array('type' => $type)
			            ),
			            'text/html'
			        )
			;

			return;

		}

		public function send($value='')
		{
				
			$this->get('mailer')->send($message);

			return;
		}*/

		/*public function send ($u_email='juan.basilio@waposat.com', $info=null, $format='alert')
		{
			$message = \Swift_Message::newInstance()
		        ->setSubject('Hello Email')
		        ->setFrom('juan.basilio@waposat.com')
		        ->setTo($u_email)
		        ->setBody(
		            $this->renderView(
		                'AppBundle:Emails:'.$format.'.html.twig',
		                array('info' => $info)
		            ),
		            'text/html'
		        )
		    ;
		    $this->get('mailer')->send($message);
		    return new Response('<html><body>Email to '.$u_email.' sent!</body></html>', Response::HTTP_OK);
		}*/
	}

?>