<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TransaksiOpController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/profil', ProfilController::class);
    Route::put('/password/{id}', [ProfilController::class, 'proses_password']);

    Route::resource('/produk', ProdukController::class);
    Route::get('/produkdelete/{id}', [ProdukController::class, 'destroy'])->name('destroy');
    Route::resource('/transaksi', TransaksiController::class);
    Route::resource('/karyawan', KaryawanController::class);
    Route::get('/karyawandelete/{id}', [KaryawanController::class, 'destroy'])->name('destroy');
    
    Route::resource('/transaksiop', TransaksiOpController::class);
});

