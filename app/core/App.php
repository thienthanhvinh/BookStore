<?php

function handleRequest()
{
    $routes = include(__DIR__ . '/../config/routes.php');

    $controllerName = $_GET['controller'] ?? 'user';
    // echo $controllerName;
    $actionName = $_GET['action'] ?? 'register';
    // echo $actionName;
    $id = $_GET['id'] ?? null;

    // echo "Full URL: " . $_SERVER['REQUEST_URI'];


    if (isset($routes[$controllerName][$actionName])) {
        $controllerFile = __DIR__ . "/../controllers/" . ucfirst($controllerName) . "Controller.php";
        $actionFunction = $routes[$controllerName][$actionName];

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            if (function_exists($actionFunction)) {
                if ($id) {
                    $actionFunction($id);
                } else {
                    $actionFunction();
                }
                return;
            };
        } else {
            echo "Not found controller";
        }
    }

    echo "404 Not Found";
}
