<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Subscribers extends Controller
{
    public function subscribe(Request $request){
            $validation=$request->validate([
                'email' =>'required|email|unique:subscribers,email'
            ]);
            if($validation==1){
                return back()->withErrors('Daha önce abone olmuşsunuz.');
            }
            else {
                DB::table('subscribers')->insert([
                    'email'=>$request->input('email'),
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]);
                return back();
            }


    }

    public function showSubscriber(){
        $subscribers=Subscriber::all();
        return view('admin.showsubscribers',compact('subscribers'));
    }
}
