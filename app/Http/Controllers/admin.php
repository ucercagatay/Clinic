<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    public function loginPass(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin.panel');
        }
        return redirect()->route('admin.login')->withErrors('Giriş bilgileriniz yanlıştır');
    }
    public function adminOut(Request $request){
        Auth::logout();
        return redirect()->route('admin.login');
    }
    public function showFeedback(){
        $contacts =Contact::all();
        return view('admin.showcontact',compact('contacts'));

    }
    public function destroy(Request $request){
       Contact::where('id',$request->delete)->delete();
        return redirect()->route('admin.messages');
    }
    public function delete(Request $request){
        Subscriber::where('id',$request->delete)->delete();
        return redirect()->route('admin.subscribers');
    }
    public function logScreen(){
        return view('admin.loginscreen');
    }
    public function panel(){
        return view('admin.panel');
    }
}
