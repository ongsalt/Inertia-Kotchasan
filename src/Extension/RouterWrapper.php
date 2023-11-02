<?php

namespace Ongsalt\InertiaKotchasan\Router;

use Kotchasan\Router;

class RouterWrapper extends Router {

    private Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;   
    }
    

        /**
     * Initialize the Router.
     *
     * @param string $className The class to receive values from the Router.
     * @throws \InvalidArgumentException If the target class is not found.
     * @return static
     */
    public function init($className)
    {
        return $this->router->init($className);
    }

    /**
     * Parse the path and return it as a query string.
     * This will intercept and pass request to Inertia controller if X-Inertia is true 
     * 
     * @param string $path The path, e.g., /a/b/c.html
     * @param array $modules Query string
     *
     * @return array
     */
    public function parseRoutes($path, $modules)
    {
        // TODO
        
        return $this->router->parseRoutes($path, $modules);
    }

    
}

function withInertiaMiddleware(Router $router): RouterWrapper {
    return new RouterWrapper($router);
}
