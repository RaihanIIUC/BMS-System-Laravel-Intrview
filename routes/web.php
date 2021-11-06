<?php

use App\Http\Controllers\Admin\PlayerAcceptController;
use App\Http\Controllers\UserAcceptController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

 Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin')->middleware('admin');
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::resource('user', UserAcceptController::class)->only(['index', 'update']);