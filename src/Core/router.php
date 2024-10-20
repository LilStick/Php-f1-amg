<?php

namespace Core;

class Router
{
    private $routes = [];

    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['POST'][$path] = $callback; // Ajout de la méthode post
    }

    public function run()
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$method][$url])) {
            $callback = $this->routes[$method][$url];

            if (is_array($callback)) {
                $controller = new $callback[0]();  
                call_user_func([$controller, $callback[1]]); 
            } else {
                call_user_func($callback);
            }
        } else {
            http_response_code(404);
            echo "404 - Page not found";
        }
    }
}