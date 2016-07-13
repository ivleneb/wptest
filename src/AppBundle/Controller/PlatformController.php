<?php 

	namespace AppBundle\Controller;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Serializer\Encoder\JsonEncoder;
	//use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
	use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
	use Symfony\Component\Serializer\Serializer;

	/**
	* 
	*/
	class PlatformController extends Controller
	{
			
		/**
		 * @Route("/dashboard", name="dashboard")
		 */
		public function dashboardAction()
		{
			
			//Verify is user is logged
			/*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			
    		$welcome = "Hola ".$user->getName()." time to monitor your sea";
			*/
			$welcome = "HIIIIII";
    		$danger = 0; $risk = 0;
			
    		$em = $this->getDoctrine()->getManager();
    		//$dql = "SELECT up FROM AppBundle:UsersBlocks up JOIN up.idBlock b JOIN b.idBlockType t WHERE (up.idUser = ".$user->getId()." AND t.blockType = 2)";
    		$dql = "SELECT up FROM AppBundle:UsersBlocks up JOIN up.idBlock b JOIN b.idBlockType t WHERE (up.idUser= 1 AND t.blockType = 2)";
    		$query = $em->createQuery($dql);
    		$u_process = $query->getResult();

    		$MonitorBlock = [];

			/*$encoders = array(new JsonEncoder());
			$normalizers = array(new ObjectNormalizer());

			$serializer = new Serializer($normalizers, $encoders);
			*/
			
    		foreach ($u_process as $up) 
    		{
    			$dql = "SELECT p FROM AppBundle:Blocks p WHERE p.id = ".$up->getIdBlock()->getId();
				$query = $em->createQuery($dql);
				$process = $query->getResult();

				$dql = "SELECT s FROM AppBundle:Blocks s WHERE s.idParentBlock = ".$process[0]->getId();
				$query = $em->createQuery($dql);
				$stations = $query->getResult();

				foreach ($stations as $s) 
				{
					$dql = "SELECT ss FROM AppBundle:BlockSensors ss WHERE ss.idBlock = ".$s->getId();
					$query = $em->createQuery($dql);
					$s_sensors = $query->getResult();

					foreach ($s_sensors as $ss) 
					{
						//$dql = "SELECT e,et FROM AppBundle:NotificationsAlert n JOIN n.idMonitoringEvent e JOIN e.idEventType et WHERE n.idUser = ".$user->getId()." AND n.viewed = 0 AND e.idBlockSensor = ".$ss->getId();
						$dql = "SELECT e FROM AppBundle:MonitoringEvents e, AppBundle:NotificationsAlert n WHERE n.idUser = 1 AND n.viewed = 0 AND n.idMonitoringEvent = e.idMonitoringEvent AND e.idBlockSensor = ".$ss->getId();

						$query = $em->createQuery($dql);
						$events_typeEvent = $query->getResult();

						$lD = $this->get('app.dataloader');
						$t=$lD->countDangerAndRisks($events_typeEvent);
						$risk = $risk + $t['risk'];
						$danger = $danger +$t['danger'];


					}
				}

				array_push($MonitorBlock, array('id'=>$process[0]->getId(), 'Name'=>$process[0]->getBlockName(), 'CodeName'=>$process[0]->getBlockCodename(), 'NumStationBlocks'=>count($stations)));
    		}

    		//array_push($StaticInfo, array('HiUser'=>$welcome, 'NumDanger'=>$danger, 'NumRisk'=>$risk, 'MonitorBlock'=>$MonitorBlock));

    		$StaticInfo = array('HiUser'=>$welcome, 'NumDanger'=>$danger, 'NumRisk'=>$risk, 'ProcessBlock'=>$MonitorBlock);

    		return new Response(json_encode($StaticInfo));
    		//return new Response(json_encode($temp));
    		//$jsonContent = $serializer->serialize($temp, 'json');
    		//return new Response($jsonContent);

		}


		/**
		 * @Route("/dashboard/process/{idProcess}", name="processBlock")
		 */
		public function processBlockAction($idProcess)
		{
			//Verify is user is logged
			/*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			*/
			
			$lD = $this->get('app.dataloader');
			$Process = $lD->LoadAction($idProcess, 1, 0, 0, 1, 0, 0, 0, 0/*, $idUser*/);

			/*$encoders = array(new JsonEncoder());
			$normalizers = array(new ObjectNormalizer());

			$serializer = new Serializer($normalizers, $encoders);

			$jsonContent = $serializer->serialize($processBlock, 'json');*/
    		return new Response(json_encode($Process));
			
		}

		/**
		 * @Route("/dashboard/update/process/{idProcess}", name="processBlockUpdate")
		 */
		public function processBlockUpdateAction($idProcess)
		{
			//Verify is user is logged
			/*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			*/
			
			$lD = $this->get('app.dataloader');
			$Process = $lD->UpdateAction($idProcess, 1, 0, 0, 1, 0, 0, 0, 0/*, $idUser*/);

    		return new Response(json_encode($Process));
			
		}

		/**
		 * @Route("/dashboard/station/{idStation}", name="stationBlock")
		 */
		public function stationBlockAction($idStation)
		{
			//Verify is user is logged
			/*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			*/
			
			$lD = $this->get('app.dataloader');
			$Station = $lD->LoadAction($idStation, 1, 1, 0, 1, 1, 20, 0, 0 /*, $idUser*/);

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/update/station/{idStation}", name="stationBlockUpdate")
		 */
		public function stationBlockUpdateAction($idStation)
		{
			//Verify is user is logged
			/*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			*/
			
			$lD = $this->get('app.dataloader');
			$Station = $lD->UpdateAction($idStation, 1, 0, 0, 0, 0, 0, 0, 0/*, $idUser*/);

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/station/{idStation}/sensor/{idSensor}/long/{long}", name="sensorData")
		 */
		public function sensorDataAction($idSensor, $idStation, $long)
		{
			//Verify is user is logged
			/*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			*/
			
			$lD = $this->get('app.dataloader');
			$Station = $lD->SensorDataAction($idSensor, 1, 1, 0, 1, 1, 3, 1, 1);

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/update/station/{idStation}/sensor/{idSensor}/lastid/{lastId}", name="sensorDataUpdate")
		 */
		public function sensorDataUpdateAction($idSensor, $idStation, $lastId)
		{
			//Verify is user is logged
			/*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			*/
			
			$lD = $this->get('app.dataloader');
			$Station = $lD->SensorDataAction($idSensor, 1, 0, 1, 0, 0, 1, 1, 1);

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/alerts/", name="alertData")
		 */
		public function AlertAction()
		{
			//Verify is user is logged
			/*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			*/
			
			$lD = $this->get('app.dataloader');
			$Station = $lD->AlertDataAction(/*, $idUser*/);

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/alerts/update", name="alertDataUpdate")
		 */
		public function AlertUpdateAction()
		{
			//Verify is user is logged
			/*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			*/
			
			$lD = $this->get('app.dataloader');
			$Station = $lD->AlertDataAction(1/*, $idUser*/);

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/report/manual/", name="reportBoard")
		 */
		/*public function AlertUpdateAction()
		{
			
			
		}
*/

	}

 ?>