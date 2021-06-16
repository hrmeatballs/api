<?php

require_once '../../../config.php';
require_once ROOT . '/app/includes/settings.php';


if(empty($_GET)){
    try {
        header('Content-type: application/json');
        $data = $db->Select("SELECT * FROM levels");
        $data = json_encode($data);
        if (empty($data)) {
            echo 'No levels found';
        } else {
            echo $data;
        }
    } catch (Exception $e) {
        var_dump($e);
    }
}else{
    switch (($_GET)) {
        case isset($_GET['world_id']):
            try {
                $world_id = $_GET['world_id'];
                if (is_numeric($world_id)) {
                    header('Content-type: application/json');
                    $data = $db->Select("SELECT * FROM `levels` WHERE `world_id` = :id", ["id" => $_GET['world_id']]);
                    json_encode($data);
                    if (empty($data)) {
                        echo 'No levels found for worlds with id: ' . $_GET['world_id'];
                    } else {
                        echo json_encode($data);
                    }
                }
            } catch (Exception $e) {
                var_dump($e);
            }
            break;
        case isset($_GET['list']):
            try {
                header('Content-type: application/json');
                $data = $db->Select("SELECT * FROM `levels`");
                json_encode($data);
                if (empty($data)) {
                    echo 'No levels found';
                } else {
                    echo $data;
                }
            } catch (Exception $e) {
                var_dump($e);
            }
            break;

    }
}


