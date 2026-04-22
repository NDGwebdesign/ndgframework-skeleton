<?php

require_once __DIR__.'/vendor/autoload.php';

Env::load(__DIR__.'/.env');

$router = new Router();
Route::setRouter($router);

// routes laden
require __DIR__.'/routes/web.php';

return $router;
