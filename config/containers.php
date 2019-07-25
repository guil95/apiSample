<?php
$container = $app->getContainer();

use App\Domain\Customer\CustomerService;
use App\App\Repository\CustomerRepository;

$container['db'] = function ($container) {
    $db = $container['settings']['db'];
    $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],$db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

$container[\App\Domain\Customer\CustomerService::class] = function ($container) {
    return new CustomerService(
        new CustomerRepository($container['db'])
    );
};
