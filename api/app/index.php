<?php

//header('content-type: application/json');
$methods = array(
    "GET", "POST", "PUT", "DELETE",
);
$arr = array(
    1    => "a",
    "2"  => "b",
    3  => "c",
    "hond" => "d",
);
echo json_encode($arr);