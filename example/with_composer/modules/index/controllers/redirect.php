<?php

namespace Index\Redirect;

use \Kotchasan\Http\Request;
use InertiaKotchasan\Inertia;


class Controller extends \Kotchasan\Controller
{

    public function index(Request $request)
    {
        Inertia::location('/index/controller/index');
    }
}
