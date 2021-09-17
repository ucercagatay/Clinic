<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    public function loginPass(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('panel');
        }
        return redirect()->route('adminpanel')->withErrors('Giriş bilgileriniz yanlıştır');
    }
    public function adminOut(Request $request){
        Auth::logout();
        return redirect()->route('loginscreen');
    }
    public function logScreen(){
        return view('admin.loginscreen');
    }
    public function panel(){
        return view('admin.panel');
    }
}
