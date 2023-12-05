<?php

namespace InertiaKotchasan;

use Kotchasan\Http\Response;

// Laravel Inertia::render only do rendering
// The middleware do might do url resolving

// Url resolving
// 

class Inertia
{

    public static function render(string $pageName, array $props = [])
    {
        $pageUrl = $_SERVER['REQUEST_URI'];
        // if not X-Inertia generate html
        $isXInertia = (isset($_SERVER['HTTP_X_INERTIA']) && ($_SERVER['HTTP_X_INERTIA'] === 'true'));
        if (!$isXInertia) {
            // Lookup for file
            // Compile to html using php props -> json
            // Send it

            $template = new Template();

            $html = $template->compile(new PageData($pageName, $props, $pageUrl, '45'));

            $response = new Response();

            return $response->withContent($html)->send();
        };

        // echo 'With X-Inertia';

        $response = new Response();
        $pageData = new PageData($pageName, $props, $pageUrl, '45');

        return $response
            ->withHeader('X-Inertia', 'true')
            ->withContent($pageData->toJson())->send();
    }
}
