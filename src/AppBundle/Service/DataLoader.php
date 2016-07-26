<?php 

	namespace AppBundle\Service;
	
	use Doctrine\ORM\EntityManager;
	use Doctrine\ORM\Query;

	class DataLoader 
	{
		private $entityManager;
		private $user, $name_user, $id_user;	
		private $risk2 = array();
		private $danger2 = array();
		private $vectorEvents;
		private $riskS = 0, $dangerS = 0;
		private $riskP = 0, $dangerP = 0;
		private $critical, $alert, $stable;
		private $requiredSensors = 4;
		private $loadStationData = 0, $loadProcessData = 0, $loadSensorData = 0;
		private $basic_stat=0, $basic_info=0, $limits=0, $long=0, $addData=0, $uselastId=0;

		public function __construct(EntityManager $entityManager)
		{
			$this->entityManager = $entityManager;
		}

		public function setupUser($user)
		{
			$this->user = $user;
			$this->id_user = $user->getId();
			$this->name_user = $user->getName();
		}

		public function retrieveSensorData($basic_info=1, $basic_stat=1, $limits=1, $long=1, $addData=1, $uselastId =0)
		{
			$this->loadSensorData = 1;
			$this->basic_info = $basic_info;
			$this->basic_stat = $basic_stat;
			$this->limits = $limits;
			$this->long = $long;
			$this->addData = $addData;
			$this->uselastId = $uselastId;
		}

		public function retrieveStationData($critical = 1 , $alert = 1, $stable = 1)
		{
			$this->loadStationData = 1;
			$this->critical = $critical;
			$this->alert = $alert;
			$this->stable = $stable;
		}

		public function retrieveProcessData($vectorEvents=0)
		{
			$this->loadProcessData = 1;
			$this->vectorEvents = $vectorEvents;
		}

		public function LoadAction($id_Block, $countEvents=1) 
		{
			//Obtener objeto bloque
			$temp = array();
			$em = $this->entityManager;
			$dql = "SELECT b FROM AppBundle:Blocks b WHERE b.id = ".$id_Block;
			$query = $em->createQuery($dql);
			$block = $query->getResult();
			$block_type = $block[0]->getIdBlockType()->getBlockType();

			if ($block_type == 3) 
			{

				$stationA = array();

				$stationA["id"] = $block[0]->getId();

				$this->blockInfo($stationA, $block[0]);

				$dql = "SELECT e FROM AppBundle:MonitoringEvents e, AppBundle:NotificationsAlert n, AppBundle:BlockSensors bs WHERE n.idUser = ".$this->id_user." AND n.viewed = 0 AND n.idMonitoringEvent = e.idMonitoringEvent AND e.idBlockSensor = bs.id AND bs.idBlock = ".$block[0]->getId();
				$query = $em->createQuery($dql);
				$events = $query->getResult();

				if ($countEvents) 
				{
					$t = $this->countDangerAndRisks($events);
					$stationA["NumRisk"] = $t['risk'];
					$stationA["NumDanger"] = $t['danger'];
					if ($stationA["NumDanger"] > 0) 
					{
						$stationA["state"] = 3;
						//$state = 3; //critical
					} else if ($stationA["NumRisk"] >0)
					{
						$stationA["state"] = 2;
						//$state = 2; //alert
					} else 
					{
						$stationA["state"] = 1;
						//$state = 1; //stable
					}
					
					$this->riskS = $this->riskS + $t['risk'];
					$this->dangerS = $this->dangerS + $t['danger'];

				}else if($this->vectorEvents)
				{
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
				}

				$stationA["RefreshFrecuencySeg"] = $block[0]->getRefresh();


				if ($this->loadSensorData == 1) 
				{
					$temp = array();
					$temp1 = $this->selectSensors($block[0]->getId());

				 	foreach($temp1 as $Sensor)
					{
						$temp[] = $this->SensorDataAction($Sensor->getIdSensor(), $block[0]->getId());
					}
					$stationA["Sensor"] = $temp;
				}

				if ($countEvents == 0)
				{
					return $stationA;
				}
				elseif ($stationA["state"] == 3 && $this->critical) 
				{
					return $stationA;
				}
				elseif ($stationA["state"] == 2 && $this->alert)
				{
					return $stationA;
				}
				elseif ($stationA["state"] == 1 && $this->stable) 
				{
					return $stationA;
				}
				else
				{
					return null;
				}

			} else 
			{

				$dql = "SELECT cb FROM AppBundle:Blocks cb WHERE cb.idParentBlock = ".$block[0]->getId();
				$query = $em->createQuery($dql);
				$child_blocks = $query->getResult();

				foreach ($child_blocks as $cb) 
				{
					$ihplt = $this->LoadAction($cb->getId(), $countEvents);	
					if ($ihplt) 
					{
						$temp[] = $ihplt;
					}   
				}

				$blockA = array("id" => $block[0]->getId());

				if ($block_type == 1) 
				{
					$blockA["NumProcessBlocks"] = count($child_blocks);
					$blockA["HiUser"] =  "Hola ".$this->name_user." time to monitor your sea...";
					if ($this->loadProcessData) 
					{
						$blockA["ProcessBlock"] = $temp;
					}		

					if($countEvents)
					{
						$blockA["NumDanger"] = $this->dangerP;
						$blockA["NumRisk"] = $this->riskP;
						$this->dangerP = 0;
						$this->riskP = 0;	
					}
				}
				else if ($block_type == 2) 
				{
					$blockA["NumStationBlocks"] = count($child_blocks);
					$this->blockInfo($blockA, $block[0]);
					if ($this->loadStationData) 
					{
						$blockA["StationBlock"] = $temp;
					}

					if ($countEvents) 
					{
						$blockA["NumDanger"] = $this->dangerS;
						$blockA["NumRisk"] = $this->riskS;
						$this->dangerP = $this->dangerP + $this->dangerS;
						$this->riskP = $this->riskP + $this->riskS;
						$this->dangerS = 0;
						$this->riskS = 0;
					}

				}

				if($this->vectorEvents)
				{
					$blockA["Danger"] = $this->danger2;
					$blockA["Risk"] = $this->risk2;
				}

				return $blockA;

			}
		}	

		public function UpdateAction($id_Block, $countEvents, $basic_stat=0, $lastId=0, $basic_info=0, $limits=0, $long=0, $addData=0, $send_Id_Station=0) 
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
					$dql = "SELECT e FROM AppBundle:MonitoringEvents e, AppBundle:NotificationsAlert n, AppBundle:BlockSensors bs WHERE n.idUser = ".$this->id_user." AND n.viewed = 0 AND n.idMonitoringEvent = e.idMonitoringEvent AND e.idBlockSensor = bs.id AND bs.idBlock = ".$block[0]->getId();
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
					$temp[] = $this->UpdateAction($cb->getId(), $countEvents, $basic_stat, $lastId, $basic_info, $limits, $long, $addData, $send_Id_Station); 
				}

				return array("id" => $block[0]->getId(), "StationBlock"=>$temp);
			}
		}


		public function AlertDataAction($update=0)
		{
			$em = $this->entityManager;
			$dql = "SELECT a FROM AppBundle:NotificationsAlert a WHERE a.idUser = ".$this->id_user." AND a.viewed = 0";
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
					if ($eventType == 'danger') 
					{
						$eventNum = 1;	
					} else if ($eventType == 'risk') 
					{
						$eventNum = 0;	
					}
					

					$alerts[] = array("idProcessBlock"=>$process[0]->getId(), "idStationBlock"=>$station->getId(), "idNotification"=>$n->getIdNotificationAlert(), "Message"=>$process[0]->getBlockName()." problemas en estacion: ".$station->getBlockCodeName().", sensor: ".$sensor->getCodename(), "Date"=>$eventDate, "AlertType"=>$eventNum);
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

		public function SensorDataAction($id_Sensor, $id_StationBlock)
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

			/*if ($send_Id_Station/*$send_Id_Station*///) 
			/*{
				$SensorData["idStationBlock"] = $Bsensor->getId();
			}*/

			if ($this->basic_info) 
			{
				$this->sensorInfo($SensorData, $Bsensor);
			}

			if ($this->limits) 
			{
				$this->sensorLimits($SensorData, $Bsensor);
			}

			$LastVals = $LastDates = null;
			$lastId = $this->uselastId;
			if ($lastId) 
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
				$LastVals = $query->setMaxResults($this->long)->getResult();

				$dql = "SELECT m.date as timing FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$LastDates = $query->setMaxResults($this->long)->getResult();
			}

			if ($this->basic_stat) 
			{
				$this->sensorBasicStat($SensorData, $LastVals);
			}

			//if ($this->long) 
			//{
				$long = count($LastVals);
				$SensorData["Long"] = $long;	
			//}

			//Last Measure
			$dql = "SELECT m FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
			$query = $em->createQuery($dql);
			$lastMeasure = $query->setMaxResults(1)->getResult();

			$SensorData["Last"] = array("id"=>$lastMeasure[0]->getIdMeasurement(),"Value"=>$lastMeasure[0]->getValue(),"Date"=>$lastMeasure[0]->getDate()->format('M-d H:i:s'));

			//Data from last Sensor measurement
			if ($this->addData) 
			{
				$this->addNotifications( $SensorData, $LastVals, $LastDates);
			}
			
			return $SensorData;		
		}


		public function selectSensors($id_Station, $num=4)
		{
			$em = $this->entityManager;
			$dql = "SELECT st_s FROM AppBundle:BlockSensors st_s WHERE st_s.idBlock = ".$id_Station;
			$query = $em->createQuery($dql);
			$station_sensor = $query->getResult();

			$relevance = array();

			foreach ($station_sensor as $s) 
			{
				$sensor = $s->getIdSensor();
				$dql = "SELECT m FROM AppBundle:Measurement m WHERE m.idSensor = ".$sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
				$measurement = $em->createQuery($dql)->setMaxResults(1)->getResult();

				if(count($measurement)==1)
				{
					$key = strval(abs(($measurement[0]->getValue() - $s->getUpDangerLimit())/($s->getUpDangerLimit())));

					$relevance[$key] = $sensor;
				}

			}

			ksort($relevance);
			$temp = array();

			if (count($relevance)>$num) 
			{	
				$counter = 0;
				foreach ($relevance as $key => $obj) 
				{
					$temp[] = $obj;
					$counter++;
					if ($counter == $num) {break;}
				}
			}
			else
			{
				foreach ($relevance as $key => $obj) 
				{
					$temp[] = $obj;
				}
			}
			return $temp;
		}


		public function blockInfo( &$stationA, $block = null )
		{
			$stationA["Name"] = $block->getBlockName();
			$stationA["CodeName"] = $block->getBlockCodeName();
			$stationA["RefreshFrecuencySeg"] = $block->getRefresh();
			$stationA["URL"] = $block->getImage();
			$stationA["Hi"] = "Welcom to ".$block->getBlockCodename();
			//$stationA["ParentBlock"] = $block->getIdParentBlock();
		}

		public function sensorInfo(&$sensorA, $bSensor = null )
		{
			$sensor = $bSensor->getIdSensor();
			$station = $bSensor->getIdBlock();
			$sensorA['Name'] = $sensor->getIdSensorModel()->getIdParameter()->getParameterName();
			$sensorA['CodeName'] = $sensor->getCodename();
			$sensorA['Unit'] = $sensor->getIdSensorModel()->getIdMeasurementUnit()->getCode();
			$sensorA['idStationBlock'] = $station->getId();
			$sensorA['nameStation'] = $station->getBlockName();
			$sensorA['codenameStation'] = $station->getBlockCodename();

		}

		public function sensorBasicStat(&$SensorData, $LastVals)
		{
			$stat = $this->MeanMaxMinValue($LastVals);
			$SensorData["MeanValue"] = $stat['mean'];
			$SensorData["MinValue"] = $stat['min']['Val'];
			$SensorData["MaxValue"] = $stat['max']['Val'];
		}

		public function sensorLimits( &$SensorData, $Bsensor = null )
		{
			$SensorData["MP"] = $Bsensor->getIdSensor()->getIdSensorModel()->getMaxLimit();
			$SensorData["LMP"] = $Bsensor->getUpDangerLimit();
			$SensorData["LMR"] = $Bsensor->getUpRiskLimit();
		}

		public function addNotifications( &$SensorData, $LastVals = null, $LastDates = null)
		{
			$lv=array();
			foreach ($LastVals as $value) 
			{
				$lv[]=$value['Val'];
			}

			$ld=array();
			foreach ($LastDates as $value) 
			{
				$ld[]=$value['timing']->format('H:i:s');
			}

			$SensorData["Data"] = array("Time"=> $ld, "Value"=> $lv);
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

	}

 ?>