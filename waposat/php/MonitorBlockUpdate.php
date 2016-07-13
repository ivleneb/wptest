<?php
/*
Every time when the block reload information will get this Object, it only contain Dynamic information.

Parameters required:
    $MonitorBlock.Id = Identification number of the MonitorBlock
    
*/

$MonitorBlock = array(
    'Id' => 1,
    'RefreshFrequencySeg' => 4,
    // Information about the MonitorPoints on the MonitorBlock
    'MonitorPoint' => [
        ['Id'=> 1,
         'NumDanger'=> 2,
         'NumRisk'=> 2,
         // Information about the Parameters on a Monitor Point
         'Parameter'=> [
            ['Id'=> 1,
             'LMP' => 8.5,
             'LastValue' => 7.3
            ],
            ['Id'=> 2,
             'LMP' => 27.5,
             'LastValue' => 21.45
            ],
            ['Id'=> 3,
             'LMP' => 5,
             'LastValue' => 3.2
            ],
            ['Id'=> 4,
             'LMP' => 4,
             'LastValue' => 2.5
            ],
            ['Id'=> 5,
             'LMP' => 5,
             'LastValue' => 5
            ]
            ]
        ],
        ['Id'=> 2,
         'NumDanger'=> 0,
         'NumRisk'=> 1,
         'Parameter'=> [
            ['Id'=> 1,
             'LMP' => 8.5,
             'LastValue' => 7.1
            ],
            ['Id'=> 2,
             'LMP' => 27.5,
             'LastValue' => 23.44
            ]
            ]
        ],
        ['Id'=> 3,
         'NumDanger'=> 1,
         'NumRisk'=> 0,
         'Parameter' => [
            ['Id'=> 1,
             'LMP' => 8.5,
             'LastValue' => 6.89
            ],
            ['Id'=> 3,
             'LMP' => 5,
             'LastValue' => 4.5
            ],
            ['Id'=> 4,
             'LMP' => 4,
             'LastValue' => 0.4
            ],
            ['Id'=> 5,
             'LMP' => 5,
             'LastValue' => 3.1
            ]
            ]
        ],
        ['Id'=> 4,
         'NumDanger'=> 0,
         'NumRisk'=> 0,
         'Parameter' => [
            ['Id'=> 1,
             'LMP' => 8.5,
             'LastValue' => 7.45
            ]
            ]
        ],
        ['Id'=> 5,
         'NumDanger'=> 0,
         'NumRisk'=> 2,
         'Parameter' => [
            ['Id'=> 1,
             'LMP' => 8.5,
             'LastValue' => 5.4
            ],
            ['Id'=> 2,
             'LMP' => 27.5,
             'LastValue' => 23.5
            ],
            ['Id'=> 3,
             'LMP' => 5,
             'LastValue' => 2.1
            ],
            ['Id'=> 5,
             'LMP' => 5,
             'LastValue' => 3.8
            ]
            ]
        ]
    ]
);

echo json_encode($MonitorBlock);
?>