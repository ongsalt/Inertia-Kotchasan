<?php

namespace InertiaKotchasan;

class Resolver
{
    public $pageUrls = [];

    public function __construct()
    {
        $this->loadManifest();   
    }

    public function loadManifest()
    {
        $content = file_get_contents(Config::$manifestPath, 'manifest.json');
        $manifest = json_decode($content, true);
        
        foreach ($manifest as $srcPath => $meta) {
            // if (str_ends_with($srcPath, '.html')) {
            //     continue;
            // }
            if (!str_contains($srcPath, Config::$pagePathPrefix)) {
                // echo $srcPath;
                continue;
            }
                        
            // Transform "resources/js/Pages/Dashboard.vue" -> "Dashboard"
            // This can render partials too but pls dont
            $pageName = str_replace(Config::$pagePathPrefix, '', $srcPath);
            $pageName = explode('.', $pageName)[0];

            $this->pageUrls[$pageName] = $meta['file'];
        }

    }

    /**
     * get js bundle url for page name
     */

    public function resolvePageUrl(string $pageName): string
    {
        if (!array_key_exists($pageName, $this->pageUrls)) {
            // Error 404
        }

        return $this->pageUrls[$pageName];
    }
}
