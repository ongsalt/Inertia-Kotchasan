<?php

namespace Index\Index;

use \Kotchasan\Http\Request;
use InertiaKotchasan\Inertia;


class Controller extends \Kotchasan\Controller
{
    public function index(Request $request)
    {
        Inertia::render('Welcome', [
            'phpVersion' => phpVersion(),
            'laravelVersion' => 'This is Kotchasan mf' 
        ]);
    }
}
