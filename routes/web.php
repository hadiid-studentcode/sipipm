<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitatorController;
use App\Http\Controllers\KepanitiaanController;
use App\Http\Controllers\MengelolaMateriController;
use App\Http\Controllers\MengelolaKegiatanController;




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
    return view('Login.index');
});

Route::resource('/dashboard', DashboardController::class);
Route::resource('/mengelola-kegiatan', MengelolaKegiatanController::class);
Route::resource('/kepanitiaan', KepanitiaanController::class);
Route::resource('/fasilitator', FasilitatorController::class);
Route::resource('/mengelola-materi', MengelolaMateriController::class);
