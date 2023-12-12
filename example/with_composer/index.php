<?php

// Fix for kotchasan class autoloader & file resolution
const APP_PATH = __DIR__ . '\\';

require_once 'vendor/autoload.php';

$app = Kotchasan::createWebApplication();

$app->run();
