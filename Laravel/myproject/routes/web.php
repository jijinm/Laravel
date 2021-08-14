<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Check;
use App\Http\Controllers\Uploadfile;
use App\Http\Controllers\Databasecontroller;
use App\Http\Controllers\QuerybuliderController;
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
Route::get('/welcome', function () {
    echo "<h1>Hello, Welcome to Laravel Framework.</h1>";
});
Route::get('/hello', function () {
    return view('hello',['name'=>'Jijin', 'location'=>'Alappuzha']);
});

Route::get('/new', [Check::class,'myfunction']);
Route::get('/users', [Check::class,'getusers']);
Route::get('/myform', [Check::class,'myform']);
Route::post('/insertdata', [Check::class,'insertdetails']);

Route::get('/studregister', [Check::class,'registration']);
Route::post('/insert', [Check::class,'insertdata']);

Route::get('/studentregistration', [Check::class,'collegestudregister']);
Route::post('/register', [Check::class,'registerdata']);
Route::get('/viewallstudents', [Check::class,'viewallstudents']);
Route::get('/viewtoppers', [Check::class,'viewtoppers']);
Route::get('/viewcount', [Check::class,'viewcount']);

Route::get('/calculator', [Check::class,'calculator']);
Route::post('/getresult', [Check::class,'getresult']);

Route::get('/dashboard', function () {
    return view('index');
});


Route::get('/uploadform', [Uploadfile::class,'uploadform']);
Route::post('/uploadfile', [Uploadfile::class,'uploaddata']);

Route::get('/empform', [Databasecontroller::class,'employeeform'])->name('empform');
Route::post('/insertempdata', [Databasecontroller::class,'insertdata']);
Route::get('/showemployees', [Databasecontroller::class,'display'])->name('employees');
Route::get('/editdata/{id}', [Databasecontroller::class,'editdata']);
Route::post('/updatedata', [Databasecontroller::class,'updatedata']);
Route::get('/deleteemployee/{id}', [Databasecontroller::class,'deletedata']);

Route::get('/customerform', [QuerybuliderController::class,'customerform'])->name('custform');
Route::post('/insertcustdata', [QuerybuliderController::class,'insertdata']);
Route::get('/showcustomers', [QuerybuliderController::class,'display'])->name('customers');
Route::get('/editdetails/{id}', [QuerybuliderController::class,'editdata']);
Route::post('/updatedetails', [QuerybuliderController::class,'updatedata']);
Route::get('/deletecustomer/{id}', [QuerybuliderController::class,'deletedata']);