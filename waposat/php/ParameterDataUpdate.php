<?php
/*
Every time when the parameter reload information will get this Object, it only contain Dynamic information.

*** PARAMETERS REQUIRED: ***
    $MonitorPoint.Id = Identification number of the MonitorPoint
    $Parameter.Id = Identification number of the MonitorPoint
    $lastID = Identification number of the last MeasureDetail to this parameter on the Monitor Point
*/

$ParameterData = array(
    'Id'=> 3,
    'IdMonitorPoint' => 1,
    'LastValue' => 7.3,
    'long' => 2,
    'RefreshFrequencySeg' => 3,
    'LastID' => 4563,
    // Historical data of the Parameter on the MonitorPoint
    'Data' => [
        'Time' => ['12:30', '12:31'],
        'Value' => [7.1, 7.2]
        ]
);

echo json_encode($ParameterData);
?>