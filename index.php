<?php

use App\Controller\Application\Application;

// Import autoload.
require __DIR__ . '/vendor/autoload.php';

// Get config app params.
$appConfigContent = file_get_contents(__DIR__ . '/config/application.config.json');
$appConfig = json_decode($appConfigContent, true, 512, JSON_THROW_ON_ERROR);

// Verify if exists a environment file.
if (file_exists(__DIR__ . '/config/env.dev.json')) {
    $envContent = file_get_contents(__DIR__ . '/config/env.dev.json');
    $env = json_decode($envContent, true);

    $appConfig = array_merge($appConfig, $env);
}

$application = new Application();
$application->init($appConfig['app']);
