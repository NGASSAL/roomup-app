<?php
namespace Core;

class Router
{
    private array $routes = [];

    public function get(string $path, array $handler): void
    {
        $this->routes['GET'][$path] = $handler;
    }

    public function dispatch(string $uri): void
    {
        $path   = strtok($uri, '?');
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$method][$path])) {
            [$class, $action] = $this->routes[$method][$path];
            (new $class())->$action();
            return;
        }

        http_response_code(404);
        echo '<h1>404 — Page introuvable</h1>';
    }
}
