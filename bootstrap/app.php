<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = new Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Set custom storage path
$storagePath = env('APP_STORAGE', base_path('custom_storage'));
$app->useStoragePath($storagePath);

// Set the cache path explicitly
$app->instance('path.cache', $storagePath . '/framework/cache');

// Configure the application
$app->configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    });

return $app;
