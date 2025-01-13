<?php

namespace App\Core;


class AdminApp
{
    public function handleRequest()
    {
        $routes = include(__DIR__ . '/../config/admin_routes.php');
        $controllerName = $_GET['controller'] ?? 'dashboard';
        $actionName = $_GET['action'] ?? 'index';
        $id = $_GET['id'] ?? null;

        if (isset($routes[$controllerName][$actionName])) {
            $controllerClass = ucfirst($controllerName) . "Controller";
            $controllerFile = __DIR__ . '/../controllers/Admin/' . $controllerClass . '.php';
            $actionFunction = $routes[$controllerName][$actionName];
            if (file_exists($controllerFile)) {
                require_once $controllerFile;

                $controllerFullClass = "App\\Controllers\\Admin\\" . $controllerClass;

                if (class_exists($controllerFullClass)) {
                    require_once __DIR__ . '/../config/database.php';
                    $conn = connectDatabase();
                    $controller = new $controllerFullClass($conn);

                    if (method_exists($controller,  $actionFunction)) {
                    }
                    if ($id) {
                        $controller->$actionFunction($id);
                    } else {
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
            // echo "controller name or action name not found!";
            return;
        }

        echo "404 Not Found";
    }
}
