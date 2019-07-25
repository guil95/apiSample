<?php

namespace App\App\Middleware;

use Slim\Http\Request;
use Slim\Http\Response;

class MyMiddleware
{
    public function __invoke(Request $request, Response $response, callable $next)
    {
        return $next($request, $response);
    }
}
