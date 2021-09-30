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

        $validated=$request->validate([
            'name' =>'required|min:3|max:30',
            'surname'=>'required|min:3|max:24',
            'email'=>'required|email',
            'phoneNumber'=>'required|numeric',
            'option'=>'required',
            'message'=>'min:3|max:240',
        ]);
        if($validated==1){
            return back()->withErrors();
        }
        else {

        DB::table('contacts')->insert([
            'name'=>$request->input('name'),
            'surname'=>$request->input('surname'),
            'email'=>$request->input('email'),
            'phoneNumber'=>$request->input('phoneNumber'),
            'option'=>$request->input('option'),
            'message'=>$request->input('message'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return back();
        }
    }

}
