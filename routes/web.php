<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/test', function () {
    return view('test');
})->name('login')->middleware('guest');


Route::get('/', function () {

    return redirect('/login');
})->name('login')->middleware('guest');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);




Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::resource('/mengelola-kegiatan', MengelolaKegiatanController::class)->middleware('auth');
Route::resource('/kepanitiaan', KepanitiaanController::class)->middleware('auth');
Route::resource('/fasilitator', FasilitatorController::class)->middleware('auth');
Route::resource('/mengelola-materi', MengelolaMateriController::class)->middleware('auth');
