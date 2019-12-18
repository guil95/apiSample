<?php

namespace App\App\Middleware;

use Slim\Psr7\Request;
use Slim\Psr7\Response;

class MyMiddleware
{
    public function __invoke(Request $request, Response $response, callable $next)
    {
        return $next($request, $response);
    }
}
