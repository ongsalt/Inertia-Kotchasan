<?php

namespace Index\Index;

use \Kotchasan\Http\Request;
use InertiaKotchasan\Inertia;


class Controller extends \Kotchasan\Controller
{

    public function index(Request $request)
    {
        Inertia::render('Welcome');
        // echo 'From index';
        // echo $request->getUri();
    }

    public function gaythai()
    {
        echo "Gaythai";
    }
}
