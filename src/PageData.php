<?php

namespace Ongsalt\InertiaKotchasan;

class PageData
{
    public string $component;
    public array $props;
    public string $url;
    public string $version;

    public function __construct(string $component, array $pageProps, string $url, string $version)
    {
        $this->component = $component;
        $this->props = $pageProps;
        $this->url = $url;
        $this->version = $version;
    }

    public function toJson()
    {
        $data['component'] = $this->component;
        $data['props'] = $this->props;
        $data['url'] = $this->url;
        $data['version'] = $this->version;

        return json_encode($data);
    }
}