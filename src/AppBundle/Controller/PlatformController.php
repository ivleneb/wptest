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
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			
    		$em = $this->getDoctrine()->getManager();

			$dql = "SELECT up FROM AppBundle:UsersBlocks up JOIN up.idBlock b JOIN b.idBlockType t WHERE (up.idUser = ".$user->getId()." AND t.blockType = 1)";
    		$query = $em->createQuery($dql);
    		$u_plants = $query->getResult();

    		$StaticInfo = [];

    		$PlantBlock = array();

    		$lD = $this->get('app.dataloader');
    		$lD->setupUser($user);
    		$lD->retrieveProcessData();

    		foreach ($u_plants as $plant) 
    		{
    			$PlantBlock[] = $lD->LoadAction($plant->getIdBlock()->getId(), $user->getId());
    		}

    		if (count($u_plants)==1) 
    		{
    			$StaticInfo = $PlantBlock[0];
    		} else 
    		{
    			//Nothing for now
    		}

    		return new Response(json_encode($StaticInfo));

		}


		/**
		 * @Route("/dashboard/process/{idProcess}", name="processBlock")
		 */
		public function processBlockAction($idProcess)
		{
			//Verify is user is logged
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			
			
			$lD = $this->get('app.dataloader');
			$lD->setupUser($user);
			$lD->retrieveSensorData(1, 0, 0, 0, 0);
			$lD->retrieveStationData();
			$lD->retrieveProcessData();

			$Process = $lD->LoadAction($idProcess, $user->getId());

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
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();

			$lD = $this->get('app.dataloader');
			$lD->setupUser($user);
    		$lD->retrieveSensorData(1, 0, 0, 0, 0, 0);
			$lD->retrieveStationData();
			$lD->retrieveProcessData();
			

			$Process = $lD->UpdateAction($idProcess, 1, 0, 0, 1, 0, 0, 0, 0/*, $idUser*/);

    		return new Response(json_encode($Process));
			
		}

		/**
		 * @Route("/dashboard/station/{idStation}", name="stationBlock")
		 */
		public function stationBlockAction($idStation)
		{
			//Verify is user is logged
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			
			$lD = $this->get('app.dataloader');
			$lD->setupUser($user);
    		$lD->retrieveSensorData(1, 1, 1, 20, 0, 0);
			$lD->retrieveStationData();
			$lD->retrieveProcessData();
			

			$Station = $lD->LoadAction($idStation, $user->getId());

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/update/station/{idStation}", name="stationBlockUpdate")
		 */
		public function stationBlockUpdateAction($idStation)
		{
			//Verify is user is logged
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			
			$lD = $this->get('app.dataloader');
			$lD->setupUser($user);
    		$lD->retrieveSensorData(0, 0, 0, 20, 0, 0);
			$lD->retrieveStationData();
			$lD->retrieveProcessData();
			

			$Station = $lD->UpdateAction($idStation, $user->getId());

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/station/{idStation}/sensor/{idSensor}/long/{long}", name="sensorData")
		 */
		public function sensorDataAction($idSensor, $idStation, $long)
		{
			//Verify is user is logged
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			
			$lD = $this->get('app.dataloader');
			$lD->setupUser($user);
    		$lD->retrieveSensorData(1, 1, 1, $long);
			$lD->retrieveStationData();
			$lD->retrieveProcessData();
			

			$Station = $lD->SensorDataAction($idSensor, $idStation);

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/update/station/{idStation}/sensor/{idSensor}/lastid/{lastId}", name="sensorDataUpdate")
		 */
		public function sensorDataUpdateAction($idSensor, $idStation, $lastId)
		{
			//Verify is user is logged
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			
			$lD = $this->get('app.dataloader');
			$lD->setupUser($user);
    		$lD->retrieveSensorData(1, 0, 0, 0, 1, $lastId);
			$lD->retrieveStationData();
			$lD->retrieveProcessData();
			

			$Station = $lD->SensorDataAction($idSensor, $idStation);

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/alerts/", name="alertData")
		 */
		public function AlertAction()
		{
			//Verify is user is logged
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			
			$lD = $this->get('app.dataloader');
			$lD->setupUser($user);
			$Station = $lD->AlertDataAction(/*, $idUser*/);

    		return new Response(json_encode($Station));
			
		}

		/**
		 * @Route("/dashboard/alerts/update", name="alertDataUpdate")
		 */
		public function AlertUpdateAction()
		{
			//Verify is user is logged
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();
			
			$lD = $this->get('app.dataloader');
			$lD->setupUser($user);
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