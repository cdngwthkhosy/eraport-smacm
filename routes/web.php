<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMutabaahSiswaController;
use App\Http\Controllers\FillformController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MutabaahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UnduhraporController;

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


Route::redirect('/', 'login');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth', 'cekrole:admin,guru')->prefix('dashboard')->group(function (){
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth','cekrole:admin,guru,siswa');

Route::get('/fillform', [FillformController::class, 'index'])->name('isianmurabbi')->middleware('auth','cekrole:admin,guru');
Route::post('/fillform', [FillformController::class, 'store']);

Route::get('/unduh-rapor', [UnduhraporController::class, 'index'])->name('unduhrapor')->middleware('auth','cekrole:admin,guru');
Route::post('/unduh-rapor', [UnduhraporController::class, 'unduh'])->middleware('auth','cekrole:admin,guru');
Route::post('/unduh-rapor/file', [UnduhraporController::class, 'unduhFile']);

Route::get('/datamutabaahsiswa', [DataMutabaahSiswaController::class, 'index'])->name('datamutabaahsiswa')->middleware('auth','cekrole:admin,guru');
Route::post('/datamutabaahsiswa', [DataMutabaahSiswaController::class, 'show_data'])->middleware('auth', 'cekrole:admin,guru');

Route::get('/mutabaah', [MutabaahController::class, 'index'])->name('mutabaah')->middleware('auth','cekrole:admin,siswa');
Route::post('/mutabaah', [MutabaahController::class, 'store']);

Route::get('/dashboard/daftar-siswa', [SiswaController::class, 'index'])->name('daftar-siswa')->middleware('auth', 'cekrole:admin,guru');
Route::get('/dashboard/daftar-siswa/edit/{id}', [SiswaController::class, 'edit'])->name('daftar-siswa.edit')->middleware('auth', 'cekrole:admin,guru');
Route::post('/dashboard/daftar-siswa/edit/update', [SiswaController::class, 'update'])->name('daftar-siswa.update')->middleware('auth', 'cekrole:admin,guru');

Route::get('/dashboard/daftar-siswa/delete/{id}', [SiswaController::class, 'delete'])->name('daftar-siswa.delete')->middleware('auth', 'cekrole:admin,guru');


