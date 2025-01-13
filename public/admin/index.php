<?php
use App\Core\AdminApp;
session_start();

require_once '../../vendor/autoload.php';
require_once '../../app/config/database.php';

$app = new AdminApp();
$app->handleRequest();



