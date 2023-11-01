<?php

namespace InertiaKotchasan;

class Template
{

    public string $html;

    public function __construct()
    {
        $this->html = file_get_contents(Config::$htmlEntry, 'index.html');
    }

    /**
     * Compiles the "@inertia" directive.
     */
    public function compile(string $component, array $pageProps, string $url, string $version)
    {
        $id = 'app';
        
        $pageData['component'] = $component;
        $pageData['props'] = $pageProps;
        $pageData['url'] = $url;
        $pageData['version'] = $version;
        
        $appDiv =  "<div id='" . $id . "' data-page='" . json_encode($pageData) . "'></div>";

        $this->html = preg_replace('/(@inertia)\n/', $appDiv, $this->html);

        return $this->html;
    }


    /**
     * Compiles the "@inertiaHead" directive.
     * 
     * @param string $bundleUrl js bundle url
     */
    public static function compileHead(array $bundleUrl)
    {
        return '<script crossorigin src="' . $bundleUrl . '" type="module"></script>';
    }

}
