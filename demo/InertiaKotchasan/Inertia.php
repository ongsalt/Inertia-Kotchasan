<?php

namespace InertiaKotchasan;

use Kotchasan\Http\Response;

class Inertia
{

    public static function render(string $pageName, array $props = [])
    {
        // if not X-Inertia generate html
        $isXInertia = isset($_SERVER['X-Inertia']) && $_SERVER['X-Inertia'] === 'true';

        if(!$isXInertia) {

            $pageUrl = (new Resolver)->resolvePageUrl($pageName);
            // echo $pageUrl;

            $template = new Template();

            $html = $template->compile($pageName, $props, '', '45');
    
            $response = new Response();

            return $response->withContent($html)->send();
        };
        
        echo 47;
        // Lookup for file
        // Compile to html using php props -> json
        // Send it


    }
    

}
