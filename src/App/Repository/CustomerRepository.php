<?php

namespace App\App\Repository;


use App\Domain\Customer\CustomerRepositoryInterface;
use DG\BypassFinals;

final class CustomerRepository implements CustomerRepositoryInterface
{
    private $connection;

    public function __construct(\PDO $connection)
    {
        /**
         * @var $connection \PDO
         */
        $this->connection = $connection;
    }

    public function findAll()
    {
        $stmt = $this->connection->prepare("SELECT * FROM customers");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
