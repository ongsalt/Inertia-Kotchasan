<?php

namespace Index\Page2;

use \Kotchasan\Http\Request;
use InertiaKotchasan\Inertia;

class Controller extends \Kotchasan\Controller
{

    public function index(Request $request)
    {
        Inertia::render('Page2', [
            'serverTime' => date('Y/m/d H:m:s')
        ]);
    }

}
