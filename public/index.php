<?php
use App\Core\App;

session_start();


// Nếu bạn dùng Composer:
require_once '../vendor/autoload.php';


require_once __DIR__ . "/../app/core/App.php";
require_once __DIR__ . "/../app/config/database.php";


// handleRequest();
// new App();

$app = new App();
$app -> handleRequest();






?>