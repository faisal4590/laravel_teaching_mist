<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function helloWorld()
    {
        return 'hello world form ' . __METHOD__;
    }
}
