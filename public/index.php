<?php
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create('../');
$dotenv->overload();

$app = new \App\Application([
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        'db' => [
            'driver'    => getenv('DB_DRIVER'),
            'charset'   => getenv('DB_CHARSET'),
            'host'      => getenv('DB_HOST'),
            'port'      => getenv('DB_PORT'),
            'dbname'    => getenv('DB_NAME'),
            'user'      => getenv('DB_USER'),
            'pass'      => getenv('DB_PASSWORD')
        ]
    ]
]);

$app->setUp()->run();
