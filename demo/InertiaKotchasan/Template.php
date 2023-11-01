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
    public function compile(PageData $pageData)
    {
        $id = 'app';

        $appDiv =  "<div id='" . $id . "' data-page='" . $pageData->toJson() . "'></div>";

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
