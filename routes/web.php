<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\form\Main;

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

Route::get('/home',[Main::class,'index'])->name('home');
Route::post('/form_login_submit',[Main::class,'form_login_submit'])->name('form_login_submit');

