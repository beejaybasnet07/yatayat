<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginAuth;
use App\Http\Controllers\Registeruser;
use App\Models\Register_user;

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
    return view('index');
});
Route::get('search',function(){
    return view('search');
});
Route::view('/','index')->name('main');

Route::get('search',[VehicleController::class,'index']);
Route::post('sea',[VehicleController::class,'showdata']);
Route::get('check',[VehicleController::class,'store']);

Route::get('login',function(){
    return view('login');
});

Route::get('aboutus',function(){
    return view('aboutus');
});
Route::post('user',[LoginAuth::class,'userlogin']);
Route::post('userprofile',[Registeruser::class,'checklogin']);
Route::get('/logout', function () {
    if(session()->has('email')){
        session()->pull('email');
    }
    return redirect('/');
});
Route::get('dropdown', function () {
    return view('dropdown');
});
Route::get('collapse', function () {
    return view('collapse');
});

Route::get('register',[Registeruser::class,'create']);
Route::get('a',[Registeruser::class,'store']);
Route::get('login',[Registeruser::class,'show']);
//Route::post('update',[Registeruser::class,'update']);


Route::post('update/{id}',[Registeruser::class,'update']);
Route::put('update',[Registeruser::class,'updateuserdata'])->name('userupdate');

Route::get('/ajaxform',function(){return view('ajaxform');});
Route::get('/formsubmit',[VehicleController::class,'showajax']);
Route::post('book',[BookController::class,'store']);
Route::view('new','new');
Route::view('ticket','ticket');



