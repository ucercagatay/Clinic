<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    public function hairpages(){
        return view('inner-page');
    }
}
