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
		private $useDateInterval = null;

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

		//public function retrieveSensorData($basic_info=1, $limits=1, $measurements=1, $basic_stat=1, $long=1, $uselastId=0, $useDates)
		public function retrieveSensorData($basic_info=1, $basic_stat=1, $limits=1, $long=1, $addData=1, $uselastId =0, array $useDateInterval = null)
		{
			$this->loadSensorData = 1;
			$this->basic_info = $basic_info;
			$this->basic_stat = $basic_stat;
			$this->limits = $limits;
			$this->long = $long;
			$this->addData = $addData;
			$this->uselastId = $uselastId;
			$this->useDateInterval = $useDateInterval;
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
						//$state = 3;
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


		private function eventReport($date_1, $date_2)
		{
			$em = $this->entityManager;
			$dql = "SELECT a FROM AppBundle:NotificationsAlert a JOIN a.idMonitoringEvent e JOIN e.idMeasurement m WHERE a.idUser = ".$this->id_user." AND m.date BETWEEN '".$this->useDateInterval['date1']->format('Y-m-d H:i:s')."' AND '".$this->useDateInterval['date2']->format('Y-m-d H:i:s')."'";
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
				$idEvent = $n->getIdMonitoringEvent->getIdMonitoringEvent();
				$eventDate = $n->getIdMonitoringEvent()->getIdMeasurement()->getDate()->format('M-d H:i:s');
				$eventType = $n->getIdMonitoringEvent()->getIdEventType()->getAlertType();
				$eventName = $n->getIdMonitoringEvent()->getIdEventType()->getEventName();

				$dql = "SELECT p FROM AppBundle:Blocks p WHERE p.id = ".$station->getIdParentBlock();
				$query = $em->createQuery($dql);
				$process = $query->getResult();

				if ($update) 
				{
					if ($eventType == 'danger')
					{
						$longDanger++;
						$dangerA[] = array("id"=>$idEvent, "idProcessBlock"=>$process[0]->getId(), "ProcessBlock"=>$process[0]->getBlockCodename(), "idStationBlock"=>$station->getId(), "StationBlock"=>$station->getBlockCodename(), "idSensor"=>$sensor->getIdSensor(), "Sensor"=>$sensor->getCodename(), "Message"=>$eventName, "Date"=>$eventDate);
					} else if($eventType == 'risk')
					{
						$longRisk++;
						$riskA[] = array("id"=>$idEvent, "idProcessBlock"=>$process[0]->getId(), "ProcessBlock"=>$process[0]->getBlockCodename(), "idStationBlock"=>$station->getId(), "StationBlock"=>$station->getBlockCodename(), "idSensor"=>$sensor->getIdSensor(), "Sensor"=>$sensor->getCodename(), "Message"=>$eventName, "Date"=>$eventDate);
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
				$idEvent = $n->getIdMonitoringEvent->getIdMonitoringEvent();
				$eventDate = $n->getIdMonitoringEvent()->getIdMeasurement()->getDate()->format('M-d H:i:s');
				$eventType = $n->getIdMonitoringEvent()->getIdEventType()->getAlertType();
				$eventName = $n->getIdMonitoringEvent()->getIdEventType()->getEventName();

				$dql = "SELECT p FROM AppBundle:Blocks p WHERE p.id = ".$station->getIdParentBlock();
				$query = $em->createQuery($dql);
				$process = $query->getResult();

				if ($update) 
				{
					if ($eventType == 'danger')
					{
						$longDanger++;
						$dangerA[] = array("id"=>$idEvent, "idProcessBlock"=>$process[0]->getId(), "ProcessBlock"=>$process[0]->getBlockCodename(), "idStationBlock"=>$station->getId(), "StationBlock"=>$station->getBlockCodename(), "idSensor"=>$sensor->getIdSensor(), "Sensor"=>$sensor->getCodename(), "Message"=>$eventName, "Date"=>$eventDate);
					} else if($eventType == 'risk')
					{
						$longRisk++;
						$riskA[] = array("id"=>$idEvent, "idProcessBlock"=>$process[0]->getId(), "ProcessBlock"=>$process[0]->getBlockCodename(), "idStationBlock"=>$station->getId(), "StationBlock"=>$station->getBlockCodename(), "idSensor"=>$sensor->getIdSensor(), "Sensor"=>$sensor->getCodename(), "Message"=>$eventName, "Date"=>$eventDate);
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
				
		public function countDangerAndRisks($events=null)
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

			//Entity manager direct access
			$em = $this->entityManager;

			//Query to single BSensor object
			$dql = "SELECT bs FROM AppBundle:BlockSensors bs WHERE bs.idBlock = ".$id_StationBlock." AND bs.idSensor = ".$id_Sensor;
			$query = $em->createQuery($dql);
			$Bsensor = $query->getSingleResult();

			//Get sensor and sensor model
			$Sensor=$Bsensor->getIdSensor();
			$SensorModel = $Sensor->getIdSensorModel();

			//Sensor Id
			$SensorData["id"] = $Sensor->getIdSensor();

			//Sensor info
			if ($this->basic_info) 
			{
				$this->sensorInfo($SensorData, $Bsensor);
			}

			//Sensor max limit and station related info
			if ($this->limits) 
			{
				$this->sensorLimits($SensorData, $Bsensor);
			}

			//Select data for add to sensors
			$lastMeasurements = null;
			$lastId = $this->uselastId;
			if ($lastId) 
			{
				$dql = "SELECT m FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." AND m.idMeasurement > ".$lastId." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$lastMeasurements = $query->getResult();

			}elseif ($this->useDateInterval) 
			{
				$dql = "SELECT m FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." AND m.date BETWEEN '".$this->useDateInterval['date1']->format('Y-m-d H:i:s')."' AND '".$this->useDateInterval['date2']->format('Y-m-d H:i:s')."'";
				$query = $em->createQuery($dql);
				$lastMeasurements = $query->getResult();

			}
			else 
			{
				$dql = "SELECT m FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$lastMeasurements = $query->setMaxResults($this->long)->getResult();
			}

			//Add basic statistics
			if ($this->basic_stat) 
			{
				$this->sensorBasicStat($SensorData, $lastMeasurements);
			}

			//The new longitude of the data stream output
			$SensorData["Long"] = count($lastMeasurements);	

			//Last Measure
			$dql = "SELECT m FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
			$query = $em->createQuery($dql);
			$lastMeasure = $query->setMaxResults(1)->getResult();
			$SensorData["Last"] = array("id"=>$lastMeasure[0]->getIdMeasurement(),"Value"=>$lastMeasure[0]->getValue(),"Date"=>$lastMeasure[0]->getDate()->format('M-d H:i:s'));

			//Data from Sensor measurements
			if ($this->addData) 
			{
				$this->addMeasureData( $SensorData, $lastMeasurements);
			}
			
			return $SensorData;		
		}

		/*public function selectMeasurements($method, $parameter1 = null, $parameter2 = null)
		{
			if ($method == 2) 
			{
				//Use lastId
				$dql = "SELECT m FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." AND m.idMeasurement > ".$lastId." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$lastMeasurements = $query->getResult();	

			} 
			elseif ($method == 1)
			{
				//Use long 
				$dql = "SELECT m FROM AppBundle:Measurement m WHERE m.idSensor = ".$Sensor->getIdSensor()." ORDER BY m.idMeasurement DESC";
				$query = $em->createQuery($dql);
				$measurements = $query->setMaxResults($this->long)->getResult();

			}
			elseif ($method == 0) 
			{
				//Use dates
				$dql = "SELECT m FROM AppBundle:Measurement m WHERE "

			}
			
		}*/

		public function blockInfo( &$block_array, $block = null )
		{
			//Monitor block general information
			$block_array["Name"] = $block->getBlockName();
			$block_array["CodeName"] = $block->getBlockCodeName();
			$block_array["RefreshFrecuencySeg"] = $block->getRefresh();
			$block_array["URL"] = $block->getImage();
			$block_array["Hi"] = "Welcom to ".$block->getBlockCodename();
			$block_array["ParentBlock"] = $block->getIdParentBlock();
		}

		public function sensorInfo(&$sensor_array, $bSensor = null )
		{
			//Sensor general information
			$sensor = $bSensor->getIdSensor();
			$station = $bSensor->getIdBlock();
			$sensor_array['Name'] = $sensor->getIdSensorModel()->getIdParameter()->getParameterName();
			$sensor_array['CodeName'] = $sensor->getCodename();
			$sensor_array['Unit'] = $sensor->getIdSensorModel()->getIdMeasurementUnit()->getCode();
			$sensor_array['idStationBlock'] = $station->getId();
			$sensor_array['nameStation'] = $station->getBlockName();
			$sensor_array['codenameStation'] = $station->getBlockCodename();

		}

		public function sensorBasicStat(&$sensor_array, $values)
		{
			$sensor_array["MeanValue"] = $sensor_array["MinValue"] = $sensor_array["MaxValue"] = null;
			if ($values) 
			{	
				//Sensor Mean, max and min from values
				$stat = $this->MeanMaxMinValue($values);
				$sensor_array["MeanValue"] = $stat['mean'];
				$sensor_array["MinValue"] = $stat['min'];
				$sensor_array["MaxValue"] = $stat['max'];
				$sensor_array["Tendencia"] = $stat['tend'];
			}
		}

		public function sensorLimits( &$sensor_array, $Bsensor = null )
		{
			//Sensor tecnical and referred to monitor station limits
			$sensor_array["MP"] = $Bsensor->getIdSensor()->getIdSensorModel()->getMaxLimit();
			$sensor_array["LMP"] = $Bsensor->getUpDangerLimit();
			$sensor_array["LMR"] = $Bsensor->getUpRiskLimit();
		}

		public function addMeasureData( &$sensor_array, $measurements)
		{
			$values=array();
			$dates=array();
			if ($this->useDateInterval) 
			{
				$len = count($measurements);
				$elemntsPerInterval = intval($len/4);
				if ($elemntsPerInterval>0) 
				{
					$all = array_chunk($measurements, $elemntsPerInterval);
					$len2 = count($all);
					$i = 0;

					for ($i=0; $i < $len2; $i++) 
					{ 
						if ($i == $len2-2) 
						{
							$temp = array_merge($all[$i], $all[$i+1]);
							//$temp = $this->MeanMaxMinValue($m);	
							$values[] = $this->MeanMaxMinValue($temp)['mean'];
							$dates[] = $temp[intval(count($temp)/2)]->getDate()->format('H:i:s');	

							break;
						} else 
						{
							//$temp = $this->MeanMaxMinValue($m);	
							$values[] = $this->MeanMaxMinValue($all[$i])['mean'];
							$dates[] = $all[$i][intval($elemntsPerInterval/2.0)]->getDate()->format('H:i:s');

						}
						
					}
				} 
				else 
				{
					foreach ($measurements as $measure) 
					{
						$values[] = $measure->getValue();
						$dates[] = $measure->getDate()->format('H:i:s');
					}
				}			
			} 
			else 
			{
				foreach ($measurements as $measure) 
				{
					$values[] = $measure->getValue();
					$dates[] = $measure->getDate()->format('H:i:s');
				}
			}

			$sensor_array["Data"] = array("Time"=> $dates, "Value"=> $values);
		}

		public function MeanMaxMinValue($measurements=null)
		{
			$mean = $cont = 0;
			$minVal = $maxVal = $measurements[0]->getValue();

			foreach ($measurements as $measure) 
			{
				$value = $measure->getValue();
				$mean = $mean + $value;
				if ($value>$maxVal) {$maxVal = $value;} else if ($value<$minVal){$minVal = $value;} 
				$cont++;
			}

			$mean = $mean/$cont;
			$tend = 100*($measurements[0]->getValue()-$mean)/$mean;
			return array("mean"=>$mean,"max"=>$maxVal, "min"=>$minVal, "tend"=>$tend);

		}

		public function getBlocks($id_user, $block_type = 0)
		{
			if ($block_type == 0) 
			{
				$dql = "SELECT b FROM AppBundle:Blocks b, AppBundle:UsersBlocks Ub WHERE Ub.idBlock = b.id AND Ub.idUser = ".$id_user;
			} else 
			{
				$dql = "SELECT b FROM AppBundle:UsersBlocks Ub, AppBundle:Blocks b JOIN b.idBlockType Bt WHERE Bt.blockType = ".$block_type." AND Ub.idBlock = b.id AND Ub.idUser = ".$id_user;
			}
			
			$query = $this->entityManager->createQuery($dql);
			$blocks = $query->getResult();

			return $blocks;

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

	}

 ?>