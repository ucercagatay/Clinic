<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Subscribers extends Controller
{
    public function subscribe(Request $request){
        DB::table('subscribers')->insert([
            'email'=>$request->input('email'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
    public function showSubscriber(){
        $subscribers=Subscriber::all();
        return view('admin.showsubscribers',compact('subscribers'));
    }
}
