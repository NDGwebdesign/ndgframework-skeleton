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

//delete .github directory if exists
$githubDir = $root . DIRECTORY_SEPARATOR . '.github';
if (is_dir($githubDir)) {
    function deleteDirectory($dir) {
        if (!is_dir($dir)) {
            return;
        }
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object === '.' || $object === '..') {
                continue;
            }
            $path = $dir . DIRECTORY_SEPARATOR . $object;
            if (is_dir($path)) {
                deleteDirectory($path);
            } else {
                unlink($path);
            }
        }
        rmdir($dir);
    }

    deleteDirectory($githubDir);
    echo "Deleted .github directory" . PHP_EOL;
}

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0775, true);
        echo "Created directory: {$directory}" . PHP_EOL;
    }
}

echo "Project setup complete." . PHP_EOL;
