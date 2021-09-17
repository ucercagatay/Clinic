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
});
Route::get('/es1609',[Controllers\admin::class,'logScreen'])->middleware('isLogin')->name('loginscreen');
Route::post('/es1609',[Controllers\admin::class,'loginPass'])->name('adminpanel');
Route::get('/es1609/panel',[Controllers\admin::class,'panel'])->name('panel');
Route::get('/adminout',[Controllers\admin::class,'adminOut'])->name('adminOut');
