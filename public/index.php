<?php

define('BASE_PATH', dirname(__DIR__));

require __DIR__.'/../vendor/autoload.php';

// Register custom autoloader for app classes
Autoloader::register();

Env::load(__DIR__.'/../.env');

$router = new Router();
Route::setRouter($router);

require __DIR__.'/../routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];

$router->dispatch($uri, $method);