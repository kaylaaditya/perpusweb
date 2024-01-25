<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
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



Route::view('dashboard', 'dashboard')->name('dashboard');
Route::view('login', 'login.login');
Route::view('register', 'login.register');
Route::view('tabel1', 'layouts.tabel-data');
Route::view('form1', 'layouts.form-tambah');
Route::view('tabel2', 'layouts.tabel-pinjam');
Route::view('form2', 'layouts.form-pinjam');
Route::view('form3', 'layouts.tambah-pinjam');
Route::view('laporan', 'layouts.laporan');

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('login', 'LoginController@formLogin')->name('login.login');
    Route::post('login', 'LoginController@login');

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/tabel1', 'BukuController@index')->name('layouts.tabel-data');

    Route::get('/form1', [BukuController::class, 'create'])->name('layouts.form-tambah');
    Route::post('/form1', [BukuController::class, 'store']);

    Route::get('/form3', [PeminjamanController::class, 'create'])->name('tambah-pinjam.create');
    Route::post('/form3', [PeminjamanController::class, 'store'])->name('tambah-pinjam.store');

    Route::get('/tabel2', 'PeminjamanController@index')->name('layouts.tabel-pinjam');
});
