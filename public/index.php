<?php
session_start();

require_once __DIR__ . '../vendor/autoload.php';
require_once __DIR__ . '/../helpers/EmailHelper.php';

require_once __DIR__ . "/../app/core/App.php";
require_once __DIR__ . "/../app/config/database.php";

// $GLOBALS['db'] = connectDatabase();


// connectDatabase();
handleRequest();




?>