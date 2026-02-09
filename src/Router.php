<?php

namespace App;

class Router
{
    protected $routes = [];
    private function addRoute($route, $controller, $action, $method)
    {
        $this->routes[$method][$route] = ['controller' => $controller, 'action'
        => $action];
    }
    public function get($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "GET");
    }
    public function post($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "POST");
    }
    public function dispatch()
    {
        $uri = trim(strtok($_SERVER['REQUEST_URI'], '?'), '/');
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes[$method] as $route => $data) {
            $routePattern = preg_replace('/\{[a-zA-Z]+\}/', '([a-zA-Z0-9_-]+)', trim($route, '/'));

            if (preg_match('#^' . $routePattern . '$#', $uri, $matches)) {
                array_shift($matches);

                $controller = $data['controller'];
                $action = $data['action'];

                $controller = new $controller();
                call_user_func_array([$controller, $action], $matches);
                return;
            }
        }

        throw new \Exception("No route found for URI: $uri");
    }
}
