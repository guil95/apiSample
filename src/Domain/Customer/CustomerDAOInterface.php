<?php

namespace App\Domain\Customer;

interface CustomerDAOInterface
{
    public function __construct(\PDO $connection);

    public function findAll();
}
