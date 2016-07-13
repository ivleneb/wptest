<?php
/*
First load of information about specific MonitorBlock, it include Static and Dynamic information

*** PARAMETERS REQUIRED: ***
    $MonitorBlock.Id = Identification number of the MonitorBlock
    
*/

$MonitorBlock = array(
    'Id' => 1,
    'Name' => 'Planta de Purificacion de Agua',
    'Hi' => 'Estas en la Planta de Purificacion de Agua - Bloque 101 -',
    'CodeName' => 'Bloque-101',
    'RefreshFrequencySeg' => 3,
    // Information about the MonitorPoints on the MonitorBlock
    'MonitorPoint' => [
        ['Id'=> 1,
         'Name' => 'Sistema de Agua Cruda',
         'CodeName' => 'PM-101',
         'NumDanger'=> 2,
         'NumRisk'=> 2,
         'Parameter'=>[ 
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'LMP' => 8.5,
             'Unit' => '',
             'LastValue' => 7.3
            ],
            ['Id'=> 2,
             'Name' => 'Temperatura',
             'Code' => 'TEMP',
             'LMP' => 27.5,
             'Unit' => 'oC',
             'LastValue' => 21.45
            ],
            ['Id'=> 3,
             'Name' => 'Cloro Residual',
             'Code' => 'CR',
             'LMP' => 5,
             'Unit' => 'ppm',
             'LastValue' => 3.2
            ],
            ['Id'=> 4,
             'Name' => 'Oxigeno Disuelto',
             'Code' => 'OD',
             'LMP' => 4,
             'Unit' => 'mg/L',
             'LastValue' => 2.5
            ],
            ['Id'=> 5,
             'Name' => 'Conductividad',
             'Code' => 'C',
             'LMP' => 5,
             'Unit' => 'uS',
             'LastValue' => 5
            ]
            ]
        ],
        ['Id'=> 2,
         'Name' => 'Tanque Reactor',
         'CodeName' => 'PM-102',
         'NumDanger'=> 0,
         'NumRisk'=> 0,
         'Parameter'=> [
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'LMP' => 8.5,
             'Unit' => '',
             'LastValue' => 7.1
            ],
            ['Id'=> 2,
             'Name' => 'Temperatura',
             'Code' => 'TEMP',
             'LMP' => 27.5,
             'Unit' => 'oC',
             'LastValue' => 23.44
            ]
            ]
        ],
        ['Id'=> 3,
         'Name' => 'Filtro Arena',
         'CodeName' => 'PM-103',
         'NumDanger'=> 0,
         'NumRisk'=> 0,
         'Parameter'=> [
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'LMP' => 8.5,
             'Unit' => '',
             'LastValue' => 6.89
            ],
            ['Id'=> 3,
             'Name' => 'Cloro Residual',
             'Code' => 'CR',
             'LMP' => 5,
             'Unit' => 'ppm',
             'LastValue' => 4.5
            ],
            ['Id'=> 4,
             'Name' => 'Oxigeno Disuelto',
             'Code' => 'OD',
             'LMP' => 4,
             'Unit' => 'mg/L',
             'LastValue' => 0.4
            ],
            ['Id'=> 5,
             'Name' => 'Conductividad',
             'Code' => 'C',
             'LMP' => 5,
             'Unit' => 'uS',
             'LastValue' => 3.1
            ]
            ]
        ],
        ['Id'=> 4,
         'Name' => 'Filtro de Carbon',
         'CodeName' => 'PM-103',
         'NumDanger'=> 0,
         'NumRisk'=> 0,
         'Parameter'=> [
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'LMP' => 8.5,
             'Unit' => '',
             'LastValue' => 7.45
            ]
            ]
        ],
        ['Id'=> 5,
         'Name' => 'Filtro Pulidor',
         'CodeName' => 'PM-105',
         'NumDanger'=> 0,
         'NumRisk'=> 2,
         'Parameter' => [ 
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'LMP' => 8.5,
             'Unit' => '',
             'LastValue' => 5.4
            ],
            ['Id'=> 2,
             'Name' => 'Temperatura',
             'Code' => 'TEMP',
             'LMP' => 27.5,
             'Unit' => 'oC',
             'LastValue' => 23.5
            ],
            ['Id'=> 3,
             'Name' => 'Cloro Residual',
             'Code' => 'CR',
             'LMP' => 5,
             'Unit' => 'ppm',
             'LastValue' => 2.1
            ],
            ['Id'=> 5,
             'Name' => 'Conductividad',
             'Code' => 'C',
             'LMP' => 5,
             'Unit' => 'uS',
             'LastValue' => 3.8
            ]
            ]
        ]
    ]
);

echo json_encode($MonitorBlock);
?>