<?php

namespace App\Domain\Customer;

use Slim\Exception\NotFoundException;

final class CustomerService
{
    private $repository;

    public function __construct(CustomerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function findAll(): array
    {
        $this->validSomeone();
        $customers = $this->repository->findAll();

        if (!$customers) {
            throw new \Exception('Clientes não encontrados');
        }

        return $customers;
    }

    /**
     * @return bool
     */
    private function validSomeone(): bool
    {
        return true;
    }
}
