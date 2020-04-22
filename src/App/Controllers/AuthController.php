<?php

namespace App\App\Controllers;


use App\App\Infra\ResponseCode;
use Firebase\JWT\JWT;
use Psr\Container\ContainerInterface;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

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

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function auth(Request $request, Response $response, $args)
    {
        $key = getenv('SECRET_JWT');

        $token = array(
            "user" => "guilherme",
            "exp" => time() + 3600
        );

        $jwt = JWT::encode($token, $key);

        $response->getBody()->write(json_encode(['token' => $jwt]));
        return $response->withStatus(ResponseCode::HTTP_OK);
    }
}
