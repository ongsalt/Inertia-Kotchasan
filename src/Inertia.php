<?php

namespace InertiaKotchasan;

use Kotchasan\Http\Response;

// Laravel Inertia::render only do rendering
// The middleware do might do url resolving

// Url resolving
// 

class Inertia
{    
    /**
     * This need to be called after APP_PATH is initialized. (after Kotchasan got autoloaded)
     */
    public static function init(?string $configPath = null) {
        if ($configPath != null) {
            Config::load($configPath);
        } else {
            Config::load(APP_PATH .  'settings/inertia.php');
        }
    }

    /**
     * Render the page
     */
    public static function render(string $pageName, array $props = [])
    {
        $pageUrl = $_SERVER['REQUEST_URI'];
        // if not X-Inertia then generate html
        $isXInertia = (isset($_SERVER['HTTP_X_INERTIA']) && ($_SERVER['HTTP_X_INERTIA'] === 'true'));
        if (!$isXInertia) {
            // Lookup for file
            // Compile to html using php props -> json
            // Send it

            $template = new Template();
            $html = $template->compile(new PageData($pageName, $props, $pageUrl, '45'))->ignoreHead()->render();
            $response = new Response();
            return (new Response())->withContent($html)->send();
        };

        $pageData = new PageData($pageName, $props, $pageUrl, '45');

        return (new Response())
            ->withHeader('X-Inertia', 'true')
            ->withContent($pageData->toJson())->send();
    }

    /**
     * Redirect
     */
    static function location(string $url) {
        header('Location: ' . $url);
    }

    /**
     * Use to determine which file should be handled by the web server not php
     */
    static function isStaticFilePath(string $url): string | null {
        $splitted = explode("/", $url);
        $path = array_slice($splitted, 1);
        
        // If url has no following path
        if (count($path) == 0) {
            // echo "No path";
            return null;
        }

        if ($path[0] != 'static') {
            // echo "is not '/static'";
            return null;
        }

        if (count($path) == 1) {
            // echo "has path but only '/static'";
            return null;
        }

        // echo 'ok';
        return implode(DIRECTORY_SEPARATOR, array_slice($path, 1));
    }

}
