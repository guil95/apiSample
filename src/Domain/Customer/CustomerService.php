<?php

namespace App\Domain\Customer;

use App\Domain\Customer\Exception\CustomerNotFound;

final class CustomerService
{
    private $dao;

    /**
     * CustomerService constructor.
     * @param CustomerDAOInterface $dao
     */
    public function __construct(CustomerDAOInterface $dao)
    {
        $this->dao = $dao;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function findAll(): array
    {
        $this->validSomeone();
        $customers = $this->dao->findAll();

        if (!$customers) {
            throw new CustomerNotFound('Clientes não encontrados');
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
