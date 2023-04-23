<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPerjalananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahDataPerjalananController;
use App\Http\Controllers\PegawaiController;



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

// Route::get('/', function () {
//     return view('layout.master');
// });

Route::get('/', function () {
    return view('dashboard.index');
});

// Route::get('/tambahData', function () {
//     return view('tambahDataPerjalanan.index');
// });

// Route::get('/dataPerjalanan', function () {
//     return view('dataPerjalanan.index');
// });

Route::resource('dataPerjalanan', DataPerjalananController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('tambahDataPerjalanan', tambahDataPerjalananController::class);
Route::resource('pegawai', pegawaiController::class);
