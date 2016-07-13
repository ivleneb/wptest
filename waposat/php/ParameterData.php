<?php
/*
First load of hitorical data of a specific Parameter on a MonitorPoint, it include Static and Dynamic information

*** PARAMETERS REQUIRED: ***
    $MonitorPoint.Id = Identification number of the MonitorPoint
    $Parameter.Id = Identification number of the MonitorPoint
    $size = how many values should show the parameter data (Default: 20)
*/

$ParameterData = array(
    'Id'=> 3,
    'IdMonitorPoint' => 1,
    'Name' => 'Cloro Residual',
    'Code' => 'CR',
    'LMP' => 5,
    'LMR' => 7.5,
    'Unit' => 'ppm',
    'MinValue' => 7.1,
    'MaxValue' => 7.6,
    'MeanValue' => 7.5,
    'LastValue' => 7.3,
    'long' => 20,
    'RefreshFrequencySeg' => 3,
    'LastID' => 4560,
    // Historical data of the Parameter on the MonitorPoint
    'Data' => [
        'Time' => ['12:30', '12:31', '12:32', '12:33', '12:34', '12:35', '12:36', '12:37', '12:38', '12:39', '12:40', '12:41', '12:42', '12:43', '12:44', '12:45', '12:46', '12:47', '12:48', '12:49' ],
        'Value' => [7.1, 7.2, 7.3, 7.4, 7.5, 7.6, 7.7, 7.9, 8.0, 7.6, 7.7, 7.8, 7.9, 8.0, 7.2, 7.3, 7.4, 7.5, 7.6, 7.7 ]
        ]
);

echo json_encode($ParameterData);
?>