<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];


// //--------------------------------------------
// //create working array
// $sortByCompany = $companies;

// //sort by company name
// ksort($sortByCompany);
// var_dump($sortByCompany);

//--------------------------------------------
//sort staff alphabetically then output

//get companies in alphabetical order
// ksort($companies);

// // sort employess alphabetically

// foreach ($companies as $company => $employees) {
//     sort($employees);
//     $companies[$company] = $employees;
// }

// print_r($companies);


//sort from biggest to smallest company list
arsort($companies);
print_r($companies);



