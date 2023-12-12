<?php

namespace InertiaKotchasan;

/**
 * Can be overwrite by /settings/inertia
 */
class Config
{
    static $manifestPath = __DIR__ . '/../js/inertia/manifest.json';
    static $pagePathPrefix = 'resources/js/Pages/';
    static $htmlEntry = __DIR__ . '/../js/inertia/resources/views/index.html';
}
