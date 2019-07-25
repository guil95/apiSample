<?php

namespace App\Domain\Customer;

final class Customer
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}