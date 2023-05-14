<?php

declare(strict_types=1);

namespace App\Lib\Routing;

/**
 * Class Handler
 * @package Routing
 */
class Handler
{
    private Router $router;
    private string $requestUri;
    private string $requestMethod;

    public function __construct(Router $router, string $requestUri, string $requestMethod)
    {
        $this->router = $router;
        $this->requestUri = $requestUri;
        $this->requestMethod = $requestMethod;
    }

    public function handle()
    {
        try {
            // Example
            // \Psr\Http\Message\ServerRequestInterface
            //$route = $router->match(ServerRequestFactory::fromGlobals());
            // OR

            // $_SERVER['REQUEST_URI'] = '/api/articles/2'
            // $_SERVER['REQUEST_METHOD'] = 'GET'
            $route = $this->router->matchFromPath($this->requestUri, $this->requestMethod);

            $parameters = $route->getParameters();
            // $arguments = ['id' => 2]
            $arguments = $route->getVars();

            $controllerName = $parameters[0];
            $methodName = $parameters[1] ?? null;

            $controller = new $controllerName();
            if (!is_callable($controller)) {
                $controller =  [$controller, $methodName];
            }

            echo $controller(...array_values($arguments));
        } catch (\Exception $exception) {
            header("HTTP/1.0 404 Not Found");
        }
    }
}
