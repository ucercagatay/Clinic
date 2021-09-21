<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class feedback extends Controller
{
    public function feedback(){
        return view('iletisim');
    }
    public function message(Request $request){
        DB::table('contact')->insert([
            'name'=>$request->input('name'),
            'surname'=>$request->input('surname'),
            'email'=>$request->input('email'),
            'phoneNumber'=>$request->input('phoneNumber'),
            'option'=>$request->input('option'),
            'message'=>$request->input('message'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return redirect()->route('mainpage');
    }

}
