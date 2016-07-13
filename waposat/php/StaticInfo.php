<?php
/*
Static Info to Load Screen 1

*** PARAMETERS REQUIRED: ***

    
*/


$StaticInfo = array(
    'HiUser' => 'Hola Emilio',
    'NumDanger'=> 1,
    'NumRisk'=> 3,
    'MonitorBlock' => [
        ['Id'=>1,
         'Name' => 'Planta de Purificacion de Agua',
         'CodeName'=> 'Bloque-101',
         'NumMonitorPoints'=> 5],
        ['Id'=>2,
         'Name' => 'Tanque XYZ',
         'CodeName'=> 'Bloque-102',
         'NumMonitorPoints'=> 3]
    ]
    
    // Maybe I could include Alerts
);

echo json_encode($StaticInfo);
?>
