<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function pagetest(){
        return view('inner-page');
    }

    public function yusuf(){
        return view('inner-page');
    }
}
