<?php 

	namespace AppBundle\Service;
	
	use Doctrine\ORM\EntityManager;
	use Doctrine\ORM\Query;

	class DataLoader 
	{
		private $entityManager;
		private $risk2 = array();
		private $danger2 = array();

		public function __construct(EntityManager $entityManager)
		{
			$this->entityManager = $entityManager;
		}

		public function LoadAction($id_Block, $countEvents, $basic_stat=0, $lastId=0, $basic_info=0, $limits=0, $long=0, $addData=0, $send_Id_Station=0, $id_user=1) 
		{
			//Obtener objeto bloque
			$temp = array();
			$em = $this->entityManager;
			$dql = "SELECT b FROM AppBundle:Blocks b WHERE b.id = ".$id_Block;
			$query = $em->createQuery($dql);
			$block = $query->getResult();

			//$risk2 = array();
			//$danger2 = array();

			if ($block[0]->getIdBlockType()->getBlockType() == 3) 
			{

				$dql = "SELECT bs FROM AppBundle:BlockSensors bs WHERE bs.idBlock = ".$block[0]->getId();
				$query = $em->createQuery($dql);
				$bsensors = $query->getResult();
				$temp = array();
				foreach ($bsensors as $s) 
				{
					$Sensor = $s->getIdSensor();

					$temp[] = $this->SensorDataAction($Sensor->getIdSensor(), $block[0]->getId(), $basic_stat, $lastId, $basic_info, $limits, $long, $addData, $send_Id_Station);
				}

				$stationA = array();

				$stationA["id"] = $block[0]->getId();
				$stationA["Name"] = $block[0]->getBlockName();
				$stationA["CodeName"] = $block[0]->getBlockCodeName();
				$stationA["URL"] = $block[0]->getImage();

				//$risk2["validate"] = "here!";

				if ($countEvents) 
				{
					$dql = "SELECT e FROM AppBundle:MonitoringEvents e, AppBundle:NotificationsAlert n, AppBundle:BlockSensors bs WHERE n.idUser = ".$id_user." AND n.viewed = 0 AND n.idMonitoringEvent = e.idMonitoringEvent AND e.idBlockSensor = bs.id AND bs.idBlock = ".$block[0]->getId();
					$query = $em->createQuery($dql);
					$events = $query->getResult(); 

					$t = $this->countDangerAndRisks($events);
					$stationA["NumRisk"] = $t['risk'];
					$stationA["NumDanger"] = $t['danger'];

					
				}else
				{
					$dql = "SELECT e FROM AppBundle:MonitoringEvents e, AppBundle:NotificationsAlert n, AppBundle:BlockSensors bs WHERE n.idUser = ".$id_user." AND n.viewed = 0 AND n.idMonitoringEvent = e.idMonitoringEvent AND e.idBlockSensor = bs.id AND bs.idBlock = ".$block[0]->getId();
					$query = $em->createQuery($dql);
					$events = $query->getResult();

					foreach ($events as $event)
					{
						if ($event->getIdEventType()->getAlertType() == 'risk') 
						{
							$this->risk2[] = array("id" => $block[0]->getId(), "Name" => $block[0]->getBlockName(), "CodeName" => $block[0]->getBlockCodeName(), "SensorName" => $event->getIdMeasurement()->getIdSensor()->getCodename(), "IdSensor" => $event->getIdMeasurement()->getIdSensor()->getIdSensor());  
						} else if ($event->getIdEventType()->getAlertType() == 'danger') 
						{
							$this->danger2[] = array("id" => $block[0]->getId(), "Name" => $block[0]->getBlockName(), "CodeName" => $block[0]->getBlockCodeName(), "SensorName" => $event->getIdMeasurement()->getIdSensor()->getCodename(), "IdSensor" => $event->getIdMeasurement()->getIdSensor()->getIdSensor());    
						} 

					}
					
					//$risk2["validate"] = "here!";

				}


				$stationA["RefreshFrecuencySeg"] = $block[0]->getRefresh();
				$stationA["Sensor"] = $temp;

				return $stationA;

				//return array("id" => $block[0]->getId() , "Name" => $block[0]->getBlockName(), "CodeName" => $block[0]->getBlockCodeName(), "NumDanger"=>$danger, "NumRisk"=>$risk, "RefreshFrecuencySeg"=>$block[0]->getRefresh(), "Sensor"=>$temp);
				
				

			} else 
			{
				
				$dql = "SELECT cb FROM AppBundle:Blocks cb WHERE cb.idParentBlock = ".$block[0]->getId();
				$query = $em->createQuery($dql);
				$child_blocks = $query->getResult();

				foreach ($child_blocks as $cb) 
				{
					$temp[] = $this->LoadAction($cb->getId(), $countEvents, $basic_stat, $lastId, $basic_info, $limits, $long, $addData, $send_Id_Station, $id_user); 
				}

				//return array("id" => $block[0]->getId(), "Name" => $block[0]->getBlockName(), "CodeName" => $block[0]->getBlockCodeName(), "Hi" => "Holaaa", "NumStationBlocks"=>count($child_blocks), "RefreshFrecuencySeg" => $block[0]->getRefresh(), "StationBlock"=>$temp);

				$blockA = array("id" => $block[0]->getId(), "Name" => $block[0]->getBlockName(), "CodeName" => $block[0]->getBlockCodeName(), "Hi" => "Holaaa", "NumStationBlocks"=>count($child_blocks), "RefreshFrecuencySeg" => $block[0]->getRefresh(), "StationBlock"=>$temp);

				if (!$countEvents) {
					$blockA["Danger"] = $this->danger2;
					$blockA["Risk"] = $this->risk2;
				}

				return $blockA;

			}
		}	

		public function UpdateAction($id_Block, $countEvents, $basic_stat=0, $lastId=0, $basic_info=0, $limits=0, $long=0, $addData=0, $send_Id_Station=0, $id_user=1) 
		{
			//Obtener objeto bloque
			$temp = array();
			$em = $this->entityManager;
			$dql = "SELECT b FROM AppBundle:Blocks b WHERE b.id = ".$id_Block;
			$query = $em->createQuery($dql);
			$block = $query->getResult();

			if ($block[0]->getIdBlockType()->getBlockType() == 3) 
			{

				$dql = "SELECT bs FROM AppBundle:BlockSensors bs WHERE bs.idBlock = ".$block[0]->getId();
				$query = $em->createQuery($dql);
				$sensors = $query->getResult();
				$temp = array();
				foreach ($sensors as $s) 
				{
					$Sensor = $s->getIdSensor();

					$temp[] = $this->SensorDataAction($Sensor->getIdSensor(), $block[0]->getId(), $basic_stat, $lastId, $basic_info, $limits, $long, $addData, $send_Id_Station);
					
				}

				$stationA = array();

				$stationA["id"] = $block[0]->getId();

				if ($countEvents) 
				{
					$dql = "SELECT e FROM AppBundle:MonitoringEvents e, AppBundle:NotificationsAlert n, AppBundle:BlockSensors bs WHERE n.idUser = ".$id_user." AND n.viewed = 0 AND n.idMonitoringEvent = e.idMonitoringEvent AND e.idBlockSensor = bs.id AND bs.idBlock = ".$block[0]->getId();
					$query = $em->createQuery($dql);
					$events = $query->getResult(); 

					$t = $this->countDangerAndRisks($events);
					$stationA["NumRisk"] = $t['risk'];
					$stationA["NumDanger"] = $t['danger'];
				}

				$stationA["Sensor"] = $temp;

				return $stationA;

				//return array("id" => $block[0]->getId(), "NumDanger"=>$danger, "NumRisk"=>$risk, "Sensor"=>$temp );

			} else 
			{
				
				$dql = "SELECT cb FROM AppBundle:Blocks cb WHERE cb.idParentBlock = ".$block[0]->getId();
				$query = $em->createQuery($dql);
				$child_blocks = $query->getResult();

				foreach ($child_blocks as $cb) 
				{
					$temp[] = $this->UpdateAction($cb->getId(), $countEvents, $basic_stat, $lastId, $basic_info, $limits, $long, $addData, $send_Id_Station, $id_user); 
				}

				return array("id" => $block[0]->getId(), "StationBlock"=>$temp);
			}
		}


		public function AlertDataAction($update=0, $id_User=1)
		{
			$em = $this->entityManager;
			$dql = "SELECT a FROM AppBundle:NotificationsAlert a WHERE a.idUser = ".$id_User." AND a.viewed = 0";
			$query = $em->createQuery($dql);
			$notifier = $query->getResult();

			$alerts = array();

			if ($update) 
			{
				$dangerA = array();
				$riskA = array();
				$longDanger = $longRisk = 0;
			}
			
			foreach ($notifier as $n) 
			{
				$station = $n->getIdMonitoringEvent()->getIdBlockSensor()->getIdBlock();
				$sensor = $n->getIdMonitoringEvent()->getIdBlockSensor()->getIdSensor();
				$eventDate = $n->getIdMonitoringEvent()->getIdMeasurement()->getDate()->format('M-d H:i:s');
				$eventType = $n->getIdMonitoringEvent()->getIdEventType()->getAlertType();

				$dql = "SELECT p FROM AppBundle:Blocks p WHERE p.id = ".$station->getIdParentBlock();
				$query = $em->createQuery($dql);
				$process = $query->getResult();

				if ($update) 
				{
					if ($eventType == 'danger')
					{
						$longDanger++;
						$dangerA[] = array("idProcessBlock"=>$process[0]->getId(), "idStationBlock"=>$station->getId(), "idSensor"=>$sensor->getIdSensor(), "Message"=>$process[0]->getBlockName()." problemas en estacion: ".$station->getBlockCodeName().", sensor: ".$sensor->getCodename(), "Date"=>$eventDate);
					} else if($eventType == 'risk')
					{
						$longRisk++;
						$riskA[] = array("idProcessBlock"=>$process[0]->getId(), "idStationBlock"=>$station->getId(), "idSensor"=>$sensor->getIdSensor(), "Message"=>$process[0]->getBlockName()." problemas en estacion: ".$station->getBlockCodeName().", sensor: ".$sensor->getCodename(), "Date"=>$eventDate);
					}
				} else 
				{
					$alerts[] = array("idProcessBlock"=>$process[0]->getId(), "idStationBlock"=>$station->getId(), "idNotification"=>$n->getIdNotificationAlert(), "Message"=>$process[0]->getBlockName()." problemas en estacion: ".$station->getBlockCodeName().", sensor: ".$sensor->getCodename(), "Date"=>$eventDate, "AlertType"=>$eventType);
				}
			}

			if ($update) 
			{
				return array("LongDanger"=>$longDanger, "LongRisk"=>$longRisk, "Danger"=>$dangerA, "Risk"=>$riskA);	
			} else 
			{
				return array("Long"=>count($notifier), "Alert"=>$alerts);
			}
			
		}
					

		public function countDangerAndRisks(/*\AppBundle\Entity\MonitoringEvents*/ $events=null)
		{
			$risk = $danger = 0;
			foreach ($events as $event)
			{
				if ($event->getIdEventType()->getAlertType() == 'risk') 
				{
					$risk = $risk +1;
				} else if ($event->getIdEventType()->getAlertType() == 'danger') 
				{
					$danger = $danger + 1;
				} 
			}

			return array('risk'=>$risk, 'danger'=>$danger);
		}

		public function MeanMaxMinValue($LastVals=null)
		{
			$mean = $cont = 0;
			$minVal = $maxVal = $LastVals[0];

			foreach ($LastVals as $value) 
			{
				$mean = $mean + $value['Val'];
				if ($value>$maxVal) {$maxVal = $value;} else if ($value<$minVal){$minVal = $value;} 
				$cont++;
			}

			return array("mean"=>$mean/$cont,"max"=>$maxVal, "min"=>$minVal);

		}

		public function SensorDataAction($id_Sensor, $id_StationBlock, $basic_stat=0, $lastId=0, $basic_info=0, $limits=0, $long=0, $addData=0, $send_Id_Station=0) 
		//public function SensorDataAction($id_Sensor, $id_StationBlock, $arg = array("basic_stat"=>0, "lastId"=>0, "basic_info"=>0, "limits"=>0, "long"=>0, "addData"=>0, "send_Id_Station"=>0))
		{
			
			$SensorData = array();

			//Obtener objeto BSensor
			$em = $this->entityManager;
			$dql = "SELECT bs FROM AppBundle:BlockSensors bs WHERE bs.idBlock = ".$id_StationBlock." AND bs.idSensor = ".$id_Sensor;
			$query = $em->createQuery($dql);
			$BSensor = $query->getResult();
			$Bsensor = $BSensor[0];

			$Sensor=$Bsensor->getIdSensor();
			$SensorModel = $Sensor->getIdSensorModel();

			$SensorData["id"] = $Sensor->getIdSensor();

			if ($send_Id_Station/*$send_Id_Station*/) 
			{
				$SensorData["idStationBlock"] = $Bsensor->getId();
			}

			if ($basic_info/*$basic_info*/) 
			{
				$SensorData["Name"] = $SensorModel->getIdParameter()->getParameterName();
				$SensorData["CodeName"] = $Sensor->getCodename();
				$SensorData["Unit"] = $SensorModel->getIdMeasurementUnit()->getCode();
			}

			if ($limits /*$limits*/) 
			{
				$maxLimit = $SensorModel->getMaxLimit();
				$maxDanger = $Bsensor->getUpDangerLimit();
				$maxRisk = $Bsensor->getUpRiskLimit();
				$SensorData["MP"] = $maxLimit;
				$SensorData["LMP"] = $maxDanger;
				$SensorData["LMR"] = $maxRisk;

			}

			$LastVals = $LastDates = null;
			if ($lastId /*$idSensor*/) 
			{
				$dql = "SELECT m.value as Val FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." AND m.idMeasurement > ".$lastId." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$LastVals = $query->getResult();

				$dql = "SELECT m.date as timing FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." AND m.idMeasurement > ".$lastId." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$LastDates = $query->getResult();

			}else 
			{
				$dql = "SELECT m.value as Val FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$LastVals = $query->setMaxResults($long)->getResult();

				$dql = "SELECT m.date as timing FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$LastDates = $query->setMaxResults($long)->getResult();
			}

			if ($basic_stat /*$basic_stat*/) 
			{
				/*$dql = "SELECT m.value as Val FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$LastVals = $query->setMaxResults($long)->getResult();*/
				$stat = $this->MeanMaxMinValue($LastVals);
				$SensorData["MeanValue"] = $stat['mean'];
				$SensorData["MinValue"] = $stat['min']['Val'];
				$SensorData["MaxValue"] = $stat['max']['Val'];
			}

			if ($long /*$long*/) 
			{
				$long = count($LastVals);
				$SensorData["Long"] = $long;	
			}

			//Last Measure
			$dql = "SELECT m FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
			$query = $em->createQuery($dql);
			$lastMeasure = $query->setMaxResults(1)->getResult();

			$SensorData["Last"] = array("id"=>$lastMeasure[0]->getIdMeasurement(),"Value"=>$lastMeasure[0]->getValue(),"Date"=>$lastMeasure[0]->getDate()->format('M-d H:i:s'));

			//Data from last Sensor measurement
			if ($addData/*$addData*/) 
			{
				
				/*$dql = "SELECT m.value as Val FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." AND m.idMeasurement > ".$lastId." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$LastVals = $query->setMaxResults($long)->getResult();	*/

				$lV=array();
				foreach ($LastVals as $value) 
				{
					$lv[]=$value['Val'];
				}

				/*$dql = "SELECT m.date as timing FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$LastDates = $query->setMaxResults($long)->getResult();*/

				$ld=array();
				foreach ($LastDates as $value) 
				{
					$ld[]=$value['timing']->format('H:i:s');
				}

				$SensorData["Data"] = array("Time"=> $ld, "Value"=> $lv);

			}
			
			
			return $SensorData;
					
		}


	}

 ?>