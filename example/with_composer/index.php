<?php

// Fix for kotchasan class autoloader & file resolution
const APP_PATH = __DIR__ . '\\';
require_once 'vendor/autoload.php';

use InertiaKotchasan\Inertia;

// This is for development you need to do something with your webserver to serve /static
// Serve the request as is for static file
if (Inertia::isStaticFilePath($_SERVER["REQUEST_URI"])) {
    return false;
}

Inertia::init();

$app = Kotchasan::createWebApplication();

$app->run();
