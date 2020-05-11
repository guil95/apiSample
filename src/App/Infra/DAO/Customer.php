<?php

namespace App\App\Infra\DAO;


use App\Domain\Customer\CustomerDAOInterface;

final class Customer implements CustomerDAOInterface
{
    private $connection;

    /**
     * Customer constructor.
     * @param \PDO $connection
     */
    public function __construct(\PDO $connection)
    {
        /**
         * @var $connection \PDO
         */
        $this->connection = $connection;
    }

    /**
     * @return array
     */
    public function findAll()
    {
        $stmt = $this->connection->prepare("SELECT * FROM customers");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
