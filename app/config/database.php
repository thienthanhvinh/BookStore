<?php
$config =  require __DIR__ . "/./config.php";


function connectDatabase()
{
    global $config;

    $host = getenv('DB_HOST');
    $user = $config['database']['user'];
    $dbName = $config['database']['name'];
    $pass = $config['database']['pass'];

    $conn = mysqli_connect($host, $user, $pass, $dbName);
    if ($conn) {
        // echo "Connect succesfully";
        return $conn;
    } else {
        die("Connect failed:" . mysqli_connect_error());
    }
}
