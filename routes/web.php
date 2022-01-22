<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\LoginAuth;
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
Route::post('search',[VehicleController::class,'showdata']);
Route::get('check',[VehicleController::class,'store']);

Route::get('login',function(){
    return view('login');
});
Route::get('register',function(){
    return view('register');
});
Route::get('aboutus',function(){
    return view('aboutus');
});
Route::post('user',[LoginAuth::class,'userlogin']);
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
Route::get('userprofile', function () {
    return view('userprofile');
});
