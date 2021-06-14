<?php

require_once '../../../config.php';
require_once ROOT . '/app/includes/settings.php';


switch (($_GET))
{
    default:
        try {
            $data = $db->Select("Select * from teachers");
            header('Content-type: application/json');
            echo json_encode($data);
        } catch (Exception $e) {
            var_dump($e);
        }
        break;
}
