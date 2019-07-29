<?php

namespace App\App\Controllers;

use App\App\Infra\ResponseCode;
use App\Domain\Customer\CustomerService;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface as Request;
use Slim\Http\Response;

class CustomerController
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
     * @throws \Exception
     */
    public function findAll(Request $request, Response $response, $args)
    {
        /**
         * @var $customerService CustomerService
         */
        $customerService = $this->container->get(CustomerService::class);
        $customers = $customerService->findAll();

        return $response->withJson(
            $customers,
            ResponseCode::HTTP_OK
        );
    }

}
