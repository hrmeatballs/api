<?php

 require_once ROOT . '/app/includes/classes/Database.php';


define("DB_HOST","server.brainbug.tech:49164");
define("DB_NAME","klankie");
define("DB_USER","stevie");
define("DB_PASSWORD","Fzzu82&8");

$db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
