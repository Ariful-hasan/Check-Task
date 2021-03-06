<?php

namespace App\Route;

use Exception;

/**
 * Need time to perfectly workable
 */
class Router {

    private array $routes;
    
    /**
     * register
     *
     * @param  mixed $requestMethod
     * @param  mixed $route
     * @param  mixed $action
     * @return self
     */
    public function register(string $requestMethod, string $route, callable | array $action): self
    {
        $this->routes[$requestMethod][$route] = $action;

        return $this;
    }
    
    /**
     * get
     *
     * @param  mixed $route
     * @param  mixed $action
     * @return self
     */
    public function get(string $route, callable | array $action): self
    {
        return $this->register('get',$route, $action);
    }
    
    /**
     * post
     *
     * @param  mixed $route
     * @param  mixed $action
     * @return self
     */
    public function post(string $route, callable | array $action): self
    {
        return $this->register('get',$route, $action);
    }

    public function routes(): array
    {
        return $this->routes;
    }
    
    /**
     * resolve
     *
     * @param  mixed $requestUri
     * @param  mixed $requestMethod
     * @return void
     * 
     * need time to perfectly workable
     */
    public function resolve(string $requestUri, string $requestMethod)
    {
        
        $route = explode("/", $requestUri)[0];// ? or / need to be checked
        $action = $this->routes[$requestMethod][$route] ?? null;

        if (!$action) {
            throw new Exception("404 not found!");
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }

        throw new Exception("404 not found!");
    }
}