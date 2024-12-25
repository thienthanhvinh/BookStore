<?php
session_start();

require_once("../app/core/App.php");
require_once("../app/config/database.php");


connectDatabase();
handleRequest();



?>