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



Route::view('admin', 'dashboard')->name('dashboard');
Route::view('login', 'login.login');
Route::view('register', 'login.register');
Route::view('tabel1', 'layouts.tabel-data');
Route::view('form1', 'layouts.form-tambah');
Route::view('tabel2', 'layouts.tabel-pinjam');
Route::view('form2', 'layouts.form-pinjam');
Route::view('laporan', 'layouts.laporan');

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('login', 'LoginController@formLogin')->name('login.login');
    Route::post('login', 'LoginController@login')->name('layouts.admin');
});
