<?php

namespace Index\Index;

use \Kotchasan\Http\Request;

class Controller extends \Kotchasan\Controller
{

    public function index(Request $request)
    {
        echo '45';
    }

    public static function gaythai(): string
    {
        return "Gaythai";
    }
}
