<?php
/*
Every time when the block reload information will get this Object, it only contain Dynamic information.

*** PARAMETERS REQUIRED: ***
    $MonitorPoint.Id = Identification number of the MonitorPoint
    
*/

$MonitorPoint = array(
    'Id' => 1,
    'NumDanger'=> 2,
    'NumRisk'=> 2,
    'RefreshFrequencySeg' => 3,
    // Information about the Parameters on the MonitorPoint
    'Parameter' => [ 
        ['Id'=> 1,
         'LastValue' => 7.3
        ],
        ['Id'=> 2,
         'LastValue' => 30
        ],
        ['Id'=> 3,
         'LastValue' => 3.2
        ],
        ['Id'=> 4,
         'LastValue' => 2.5
        ],
        ['Id'=> 5,
         'LastValue' => 5
        ]
    ]
    
);



echo json_encode($MonitorPoint);
?>