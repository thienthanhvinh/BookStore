<?php

use App\Core\App;

session_start();


// Nếu bạn dùng Composer:
require_once '../vendor/autoload.php';
require_once '../app/config/database.php';

$app = new App();
$app->handleRequest();
?>