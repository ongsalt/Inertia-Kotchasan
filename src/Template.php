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
    public function compile(PageData $pageData): self
    {
        $id = 'app';
        $appDiv =  "<div id='" . $id . "' data-page='" . $pageData->toJson() . "'></div>";
        $this->html = preg_replace('/(@inertia)\n/', $appDiv, $this->html);
        return $this;
    }


    /**
     * Compiles the "@inertiaHead" directive.
     * 
     * @param string $bundleUrl js bundle url
     */
    public function compileHead(array $bundleUrl): self
    {
        $appHead = '<script crossorigin src="' . $bundleUrl . '" type="module"></script>';
        $this->html = preg_replace('/(@inertiaHead)\n/', $appDiv, $this->html);
        return $this;
    }

    public function ignoreHead(): self
    {
        $this->html = preg_replace('/(@inertiaHead)\n/', '', $this->html);
        return $this;
    }

    public function render(): string {
        return $this->html;
    }

}
