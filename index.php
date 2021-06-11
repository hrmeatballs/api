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
            "URL" => "https://" . BASE_URL. "levels/",
        ],
        [
            "Usage" => "Returns all levels from specified id",
            "URL" => "https://" . BASE_URL. "levels/[world-id]"
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
            "URL" => "https://" . BASE_URL. "students/?list",
        ],
        [
            "Usage" => "Get student by ID",
            "URL" => "https://" . BASE_URL . "students/" . '?id=[id]',
        ],
    ],
    "URL"=> "https:/" . BASE_URL . "students",
];

$namespaces['teachers'] = [
    "Namespace:"=> "teachers",
    "Methods"=> ['GET'],
    "Description" => "Get all teachers ",
    "Endpoints"=> [
        [
            "Usage" => "Returns all teachers",
            "URL" => "https://" . BASE_URL. "teachers/?list",
        ],
        [
            "Usage" => "Get teacher by ID",
            "URL" => "https://" . BASE_URL . "teachers/" . '?id=[id]',
        ],
    ],
    "URL"=> "https://" . BASE_URL . "students",
];

$documentation['Description'] = "Klank avontuur Game API v1 ";
$documentation['Author'] = 'Nigel Ritfeld <info@nigelritfeld.nl>';
$documentation['namespaces'] = $namespaces;

//var_dump($_SERVER);
echo json_encode($documentation);
