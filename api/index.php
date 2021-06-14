<?php
define('BASE_URL' , $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
header('Content-Type: application/json');


$namespaces['levels'] = [
    "Namespace:"=> "levels",
    "Methods"=> ['GET'],
    "Description" => "Get all levels ",
    "Endpoints"=> [
        [
            "Usage" => "Returns all levels",
            "URL" => "http://" . BASE_URL. "levels/",
        ],
        [
            "Usage" => "Returns all levels from specified id",
            "URL" => "http://" . BASE_URL. "levels/[worlds-id]"
        ],
    ],
    "URL"=> "/levels",
];

$namespaces['students'] = [
    "Namespace:"=> "students",
    "Methods"=> ['GET'],
    "Description" => "Get all levels ",
    "Endpoints"=> [
        [
            "Usage" => "Returns all students",
            "URL" => "http://" . BASE_URL. "students/?list",
        ],
        [
            "Usage" => "Get student by ID",
            "URL" => "http://" . BASE_URL . "students/" . '?id=[id]',
        ],
    ],
    "URL"=> "http://" . BASE_URL . "students",
];

$namespaces['teachers'] = [
    "Namespace:"=> "teachers",
    "Methods"=> ['GET'],
    "Description" => "Get all teachers ",
    "Endpoints"=> [
        [
            "Usage" => "Returns all teachers",
            "URL" => "http://" . BASE_URL. "teachers/?list",
        ],
        [
            "Usage" => "Get teacher by ID",
            "URL" => "http://" . BASE_URL . "teachers/" . '?id=[id]',
        ],
    ],
    "URL"=> "http://" . BASE_URL . "students",
];

$namespaces['worlds'] = [
    "Namespace:"=> "worlds",
    "Methods"=> ['GET'],
    "Description" => "Get all worlds ",
    "Endpoints"=> [
        [
            "Usage" => "Returns all worlds",
            "URL" => "http://" . BASE_URL. "worlds/?list",
        ],
        [
            "Usage" => "Get world by ID",
            "URL" => "http://" . BASE_URL . "worlds/" . '?id=[id]',
        ],
    ],
    "URL"=> "http://" . BASE_URL . "students",
];

$documentation['Description'] = "Klank avontuur Game API v1 ";
$documentation['Author'] = 'Nigel Ritfeld <info@nigelritfeld.nl>';
$documentation['namespaces'] = $namespaces;

//var_dump($_SERVER);
echo json_encode($documentation);
