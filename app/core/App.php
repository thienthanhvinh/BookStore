<?php

namespace App\Core;

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
                    require_once __DIR__ . '/../config/database.php';
                    $conn = connectDatabase();
                    $controller = new $controllerFullClass($conn);

                    if (method_exists($controller,  $actionFunction)) {
                    }
                    if ($id) {
                        // echo "Calling action $actionFunction with ID: $id";
                        $controller->$actionFunction($id);
                    } else {
                        // echo "Calling action $actionFunction without ID";
                        $controller->$actionFunction();
                    }
                    return;
                } else {
                    echo "Controller FullClass $controllerFullClass not found!";
                }
            } else {
                echo "Controller File $controllerFile not found!";
                return;
            }
        } else {
            echo "Controller name or action name not exists";
            return;
        }

        echo "404 Not Found";
    }
}
