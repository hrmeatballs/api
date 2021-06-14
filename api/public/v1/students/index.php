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
            header('Content-type: application/json');
            $data = $db->Select("Select * from students where id = :id", ["id" => $_GET['id']]);
            if (empty($data)){
                header('Content-Type: text/plain');
                echo 'no records found';
                exit();
            }else{
            echo json_encode($data);
            }
        } catch (Exception $e) {
            var_dump($e);
        }
        break;
    case empty(isset($_GET['id'])) && isset($_GET['list']):
        try {
            $data = $db->Select("Select * from students");
            if (empty($data)){
                header('Content-Type: text/plain');
                echo 'no records found';
                exit();
            }else{
            header('Content-type: application/json');
            echo json_encode($data);
            }
        } catch (Exception $e) {
            var_dump($e);
        }
        break;
}