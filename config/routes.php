<?php
$app->get('/', \App\App\Controllers\CustomerController::class. ':findAll')->add(
    new Tuupola\Middleware\JwtAuthentication([
    "secure" => false,
    "secret" => getenv("SECRET_JWT")
]));
$app->get('/login', \App\App\Controllers\AuthController::class. ':login');
