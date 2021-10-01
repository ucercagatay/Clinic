<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    public function hairpages(){
        return view('inner-page');
    }
    public function esteticpages(){
        return view('gözBurunEstetik');
    }
    public function eyebrowpages(){
        return view('kasEkimi');
    }
    public function beardmustache(){
        return view('sakalBiyikEkimi');
    }
    public function mezoterapi(){
        return view('mezoterapi');
    }
    public function prptedavi(){
        return view('prpTedavi');
    }
    public function hairlaser(){
        return view('sacLazeri');
    }
}
