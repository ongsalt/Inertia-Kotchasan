<?php

namespace Lmao\Rel;

use \Kotchasan\Http\Request;
use InertiaKotchasan\Inertia;


class Controller extends \Kotchasan\Controller
{

    public function index(Request $request)
    {
        // Inertia::render('Welcome');
        // echo $request->getUri();
        echo 'rel';
    }

    public function gaythai(): string
    {
        echo "Gaythai";
    }
}
