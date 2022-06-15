<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    // this is the "Index" method from web.php
    public function Index() {
        return view('about');
    } // end method
}
