<?php
$app->get('/', \App\App\Controllers\CustomerController::class. ':findAll')->add(
    new Tuupola\Middleware\JwtAuthentication([
    "secure" => false,
    "secret" => getenv("SECRET_JWT")
]));

$app->get('/auth', \App\App\Controllers\AuthController::class. ':auth');
