<?php 

	namespace AppBundle\Controller;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\Extension\Core\Type\DateType;
	use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;
	use Symfony\Component\Form\Extension\Core\Type\EmailType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;

	/**
	* 
	*/
	class HistoricalReportController extends Controller
	{
		/**
		 * @Route("history/events", name="eventsReport")
		 */
		public function EventReport(Request $request)
		{
			//Verify is user is logged
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
        		throw $this->createAccessDeniedException();
    		}
    		$user = $this->getUser();

    		$parameters = $request->request->all();

    		$date1 = date_create_from_format('d-M-Y H:i:s', $parameters['date1']);
			$date1->getTimestamp();
    		$date2 = date_create_from_format('d-M-Y H:i:s', $parameters['date2']);
			$date2->getTimestamp();;
			
    		$lD = $this->get('app.dataloader');
	    	$lD->setupUser($user);
	    	$lD->retrieveSensorData(1, 1, 0, 0, 1, 0, array('date1'=>$date1, 'date2'=>$date2));
			$Station = $lD->AlertDataAction(1);

    		return new Response(json_encode($Station));
		}
		
		/**
		 * @Route("history/form/{fecha}", name="infoAction")
		 */
		public function StaticInfoAction(Request $request)
		{
		    
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
			{
	        	throw $this->createAccessDeniedException();
	    	}
	    	$user = $this->getUser();

		    $defaultData = array('message' => 'Type your message here');
		    $form = $this->createFormBuilder($defaultData)
		        ->add('date1', DateTimeType::class)
		        ->add('date2', DateTimeType::class) 
		        ->add('send', SubmitType::class)
		        ->getForm();

		    $form->handleRequest($request);

		    if ($form->isValid()) {
		        // data is an array with "name", "email", and "message" keys
		        $data = $form->getData();
				
	    		$em = $this->getDoctrine()->getManager();

				$dql = "SELECT up FROM AppBundle:UsersBlocks up JOIN up.idBlock b JOIN b.idBlockType t WHERE (up.idUser = ".$user->getId()." AND t.blockType = 1)";
	    		$query = $em->createQuery($dql);
	    		$u_plants = $query->getResult();

	    		$StaticInfo = [];

	    		$PlantBlock = array();

	    		$lD = $this->get('app.dataloader');
	    		$lD->setupUser($user);
	    		$lD->retrieveSensorData(1, 1, 0, 0, 1, 0, array('date1'=>$data['date1'], 'date2'=>$data['date2']));
				$lD->retrieveStationData();
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


		    	return $this->render('forms/form.html.twig', array('form' => $form->createView(), 'StaticInfo'=>json_encode($StaticInfo)));
		    }

		    // ... render the form
		    return $this->render('forms/form.html.twig', array('form' => $form->createView(), 'data'=>null));
		}
	}
 ?>