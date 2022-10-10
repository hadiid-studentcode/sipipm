<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SilabusController;
use App\Http\Controllers\OutboundController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitatorController;
use App\Http\Controllers\KepanitiaanController;
use App\Http\Controllers\PrepostTestController;
use App\Http\Controllers\HasilbelajarController;
use App\Http\Controllers\MengelolaMateriController;
use App\Http\Controllers\MengelolaKegiatanController;
use App\Http\Controllers\PemahamanKeaktifanController;



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
Route::resource('/peserta', PesertaController::class)->middleware('auth');
Route::resource('/fasilitator', FasilitatorController::class)->middleware('auth');
Route::resource('/mengelola-materi', MengelolaMateriController::class)->middleware('auth');
Route::resource('/bank-materi', SilabusController::class)->middleware('auth');

Route::resource('/pre-post-test', PrepostTestController::class)->middleware('auth');




Route::get('/pre-post-test/{idmateri}/{pre}', [PrepostTestController::class, 'pretest'])->middleware('auth');
Route::get('/pre-post-test/{idmateri}/{post}', [PrepostTestController::class, 'posttest'])->middleware('auth');



Route::resource('/pemahaman-keaktifan', PemahamanKeaktifanController::class)->middleware('auth');

// Route::get('/pre-post-test/{idmateri}', [PemahamanKeaktifanController::class, 'materi'])->middleware('auth');


Route::resource('/outbound', OutboundController::class)->middleware('auth');


Route::resource('/hasil-belajar', HasilbelajarController::class)->middleware('auth');


