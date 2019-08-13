<?php

namespace App\Domain\Customer;

interface CustomerRepositoryInterface
{
    public function __construct(\PDO $connection);

    public function findAll();
}
