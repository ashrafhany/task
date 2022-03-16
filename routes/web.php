<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('get/details', [App\Http\Controllers\AdminTaskController::class, 'getDetails'])->name('get.details');
Route::get('get/delivery_date', [App\Http\Controllers\AdminTaskController::class, 'delivery_date'])->name('get.delivery_date');
Route::group(['prefix'=>'admin','middleware'=>'roles','roles'=>'admins'],function(){
    Route::resource('users','AdminUserController');
    Route::resource('tasks','AdminTaskController');


});

