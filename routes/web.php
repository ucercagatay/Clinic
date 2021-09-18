<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('mainpage');
Route::get('/es1609',[Controllers\admin::class,'logScreen'])->middleware('isOut')->name('loginscreen');
Route::post('/es1609',[Controllers\admin::class,'loginPass'])->name('adminpanel');
Route::get('/es1609/panel',[Controllers\admin::class,'panel'])->middleware('isLogin')->name('panel');
Route::get('/adminout',[Controllers\admin::class,'adminOut'])->name('adminOut');
Route::get('/contact',[Controllers\feedback::class,'feedback'])->name('feedback');
Route::post('/contact',[Controllers\feedback::class,'message'])->name('contact');
Route::get('/es1609/panel/messages',[Controllers\admin::class,'showFeedback']);
