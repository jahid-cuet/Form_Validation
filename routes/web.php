<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestController;
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
Route::post('/adduser',[Controller::class,'AddUser'])->name('addUser');

Route::get('/request', function () {
    return view('request');
});
Route::post('/adduser/request',[RequestController::class,'RequestAddUser'])->name('request');
