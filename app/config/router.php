<?php

namespace App\Config;

class Router
{
    private static array $routes = [];

    public static function add($method, $path, $controller, $function)
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run()
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestPath   = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach (self::$routes as $route) {
            if (
                $route['method'] === $requestMethod &&
                $route['path'] === $requestPath
            ) {
                $controller = new $route['controller'];
                $function = $route['function'];
                return $controller->$function();
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}
