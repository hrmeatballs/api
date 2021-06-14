<?php

require_once '../../../config.php';
require_once ROOT . '/app/includes/settings.php';



if(!isset($_GET)){
echo 'no parameters were passed';
}
switch ($_GET)
{
    case empty($_GET):
        echo 'no parameters were passed';
       break;
    case isset($_GET['id']):
        try {
            $data = $db->Select("SELECT * FROM `levels` WHERE `world_id` = :id", ["id" => $_GET['id'] ] );
            header('Content-type: application/json');
            if (empty($data)){
                echo 'no records found';
                exit();
            }else{
            echo json_encode($data);
            }
        } catch (Exception $e) {
            var_dump($e);
        }
        break;

}