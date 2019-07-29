<?php

namespace App\App\Controllers;


use App\App\Infra\ResponseCode;
use Firebase\JWT\JWT;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface as Request;
use Slim\Http\Response;

class AuthController
{
    protected $container;

    /**
     * CustomerController constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function login(Request $request, Response $response, $args)
    {
        $key = getenv('SECRET_JWT');

        $token = array(
            "user" => "guilherme",
            "exp" => time() + 3600
        );

        $jwt = JWT::encode($token, $key);

        return $response->withJson(['token' => $jwt], ResponseCode::HTTP_OK);
    }
}
