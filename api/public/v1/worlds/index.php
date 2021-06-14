<?php

require_once '../../../config.php';
require_once ROOT . '/app/includes/settings.php';

switch (($_GET)) {
    case isset($_GET['id']):
        try {
            $world_id = $_GET['id'];
            if (is_numeric($world_id)) {
                header('Content-type: application/json');
                $data = $db->Select("SELECT * FROM `worlds` WHERE `world_id` = :id", ["id" => $_GET['worlds']]);
                json_encode($data);
                if (empty($data)) {
                    echo 'No levels found for worlds with id: ' . $_GET['worlds'];
                } else {
                    echo $data;
                }

            }
        } catch (Exception $e) {
            var_dump($e);
        }
        break;
    case isset($_GET['list']):
        try {
                header('Content-type: application/json');
                $data = $db->Select("SELECT * FROM `worlds` WHERE `world_id` = :id", ["id" => $_GET['worlds']]);
                json_encode($data);
                if (empty($data)) {
                    echo 'No levels found for worlds with id: ' . $_GET['worlds'];
                } else {
                    echo $data;
                }

        } catch (Exception $e) {
            var_dump($e);
        }
        break;
}
