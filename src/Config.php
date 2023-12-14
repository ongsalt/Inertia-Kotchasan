<?php

namespace InertiaKotchasan;

/**
 * Can be overwrite by /settings/inertia
 */
class Config
{
    static $distPath = __DIR__ . '/static/inertia/';
    
    static $manifestPath =  __DIR__ . '/static/inertia/' .  '.vite/manifest.json';
    static $pagePathPrefix = __DIR__ . 'resources/js/Pages';
    static $htmlEntry = __DIR__ . '/static/inertia/resources/views/index.html';


    static function load(string $configPath)
    {
        $data = require $configPath;

        $resourcePath = $data['resourcePath'];
        $distPath = $data['distPath'] ;
        
        // Currently unused
        static::$manifestPath = $distPath . 'inertia/.vite/manifest.json';
        static::$pagePathPrefix = $resourcePath . 'resources/js/Pages';
        // Used
        static::$distPath = $distPath;
        static::$htmlEntry = $distPath . 'inertia/resources/views/index.html';
    }
}
