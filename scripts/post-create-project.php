<?php

declare(strict_types=1);

$root = dirname(__DIR__);

$envExample = $root . DIRECTORY_SEPARATOR . '.env.example';
$envFile = $root . DIRECTORY_SEPARATOR . '.env';

if (!file_exists($envFile) && file_exists($envExample)) {
    copy($envExample, $envFile);
    echo "Created .env from .env.example" . PHP_EOL;
}

$directories = [
    $root . DIRECTORY_SEPARATOR . 'storage',
    $root . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'logs',
    $root . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'storage'
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0775, true);
        echo "Created directory: {$directory}" . PHP_EOL;
    }
}

echo "Project setup complete." . PHP_EOL;
