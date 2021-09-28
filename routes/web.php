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
//Admin giriş işlemleri ve çıkış yapılıp yapılmadığının kontrol işlemi
Route::prefix('/es1609')->name('admin.')->group(function () {
    Route::get('/giris',[Controllers\admin::class,'logScreen'])->middleware('isOut')->name('login');
    Route::post('/giris',[Controllers\admin::class,'loginPass'])->name('login.post');
});
//Giriş doğru olduğu durumda panel içindeki route işlemleri
Route::prefix('/es1609')->middleware('isLogin')->name('admin.')->group(function () {
    Route::get('/panel',[Controllers\admin::class,'panel'])->name('panel');
    Route::get('/adminout',[Controllers\admin::class,'adminOut'])->name('adminOut');
    Route::get('/panel/messages',[Controllers\admin::class,'showFeedback'])->name('messages');
    Route::post('/panel/messages',[Controllers\admin::class,'destroy'])->name('messages.post');
    Route::get('/panel/subscribers',[Controllers\subscribers::class,'showSubscriber'])->name('subscribers');
});
Route::get('/contact',[Controllers\feedback::class,'feedback'])->name('feedback');
Route::post('/contact',[Controllers\feedback::class,'message'])->name('contact');
//Sayfalar
//Anasayfa işlemleri
Route::get('/', function () {return view('welcome');})->name('mainpage');
Route::post('/' , [Controllers\subscribers::class,'subscribe'])->name('mainpage.post');
//Sayfalama işlemleri
Route::prefix('/pages')->name('page.')->group(function(){
    Route::get('/sacekimi',[Controllers\pages::class,'hairpages'])->name('hairpage');

});

//Denemek amaçlı kullanılan routelar
Route::get('/denemepage',[Controllers\test::class,'pagetest'])->name('pagetest');
Route::get('/yusuf',[Controllers\test::class,'yusuf']);
