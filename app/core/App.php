<?php

function handleRequest()
{
    $routes = include(__DIR__ . '/../config/routes.php');

    $controllerName = $_GET['controller'] ?? 'user';
    // echo $controllerName;
    $actionName = $_GET['action'] ?? 'login';
    // echo $actionName;
    $id = $_GET['id'] ?? null;


    if (isset($routes[$controllerName][$actionName])) {
        print_r($routes[$controllerName][$actionName]);
        $controllerFile = __DIR__ . "/../controllers/" . ucfirst($controllerName) . "Controller.php";
        $actionFunction = $routes[$controllerName][$actionName];

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            echo $controllerFile;

            if (function_exists($actionFunction)) {
                if ($id) {
                    $actionFunction($id);
                } else {
                    $actionFunction();
                    echo $actionFunction;
                }
                return;
            };
        } else {
            echo "Not found controller";
        }
    }

    echo "404 Not Found";
}
