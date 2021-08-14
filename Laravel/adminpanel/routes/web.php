<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Ratingcontroller;
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
Route::get('/home', function () {
    return view('index');
})->name('home');
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/changepwd', function () {
    return view('changepassword');
});

Route::post('/insertdetails', [Admin::class,'insertdata']);
Route::post('/logindata', [Admin::class,'loginwithdata']);
Route::post('/changepassword', [Admin::class,'changepwd']);
Route::get('/myprofile', [Admin::class,'profile']);
Route::post('/updatedetails', [Admin::class,'updatedata']);
Route::get('/logout', [Admin::class,'logout']);


Route::get('/ratingform', function () {
    return view('ratingform');
});
Route::post('/insertrating', [Ratingcontroller::class,'insertdata']);