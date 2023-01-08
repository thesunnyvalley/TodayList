<?php

use Illuminate\Support\Facades\Route;
use App\Models\reward;
use App\Models\users;
use App\Models\todaytasks;
use App\Http\Controllers\ListUsersController;

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
    return redirect('/');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//return redirect('/userlist');
//Route::get('/userlist', [App\Http\Controllers\ListUsersController::class, 'index'])->name('userlist');
