<?php

require __DIR__.'/../vendor/autoload.php';

Env::load(__DIR__.'/../.env');

$router = new Router();

require __DIR__.'/../routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];

$router->dispatch($uri, $method);