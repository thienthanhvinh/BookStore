<?php

namespace App\Core;

use App\Controllers\UserController;

class App
{
    public function handleRequest()
    {
        $routes = include(__DIR__ . '/../config/routes.php');


        $controllerName = $_GET['controller'] ?? 'user';
        $actionName = $_GET['action'] ?? 'register';

        $id = $_GET['id'] ?? null;



        if (isset($routes[$controllerName][$actionName])) {
            $controllerClass = ucfirst($controllerName) . "Controller";
            $controllerFile = __DIR__ . '/../controllers/' . $controllerClass . '.php';
            $actionFunction = $routes[$controllerName][$actionName];

            if (file_exists($controllerFile)) {
                require_once $controllerFile;

                $controllerFullClass = "App\\Controllers\\" . $controllerClass;

                if (class_exists($controllerFullClass)) {
                    $controller = new $controllerFullClass();
                    if (method_exists($controller,  $actionFunction)) {
                    }
                    if ($id) {
                        $controller->$actionFunction($id);
                    } else {
                        $controller->$actionFunction();
                    }
                    return;
                } else {
                    echo "Action $actionName not found!";
                }
            } else {
                echo "Controller class $controllerFullClass not found!";
            }
        } else {
            echo "Controller file $controllerFile not found!";
        }

        echo "404 Not Found";
    }
}
