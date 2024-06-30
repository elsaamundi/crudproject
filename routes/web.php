<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/users', 'App\Http\Controllers\UserCon@index')->middleware(['auth', 'verified'])->name('users');
Route::get('/users/hapus/{id}', 'App\Http\Controllers\UserCon@hapus')->middleware(['auth', 'verified']);

Route::get('/printer','App\Http\Controllers\PrinterCon@index')->middleware(['auth', 'verified'])->name('printer');
Route::get('/printer/tambah', 'App\Http\Controllers\PrinterCon@tambah')->middleware(['auth', 'verified']);
Route::post('/printer/storetambah', 'App\Http\Controllers\PrinterCon@store')->middleware(['auth', 'verified']);
Route::get('/printer/edit/{id}', 'App\Http\Controllers\PrinterCon@edit')->middleware(['auth', 'verified']);
Route::post('/printer/update', 'App\Http\Controllers\PrinterCon@storeupdate')->middleware(['auth', 'verified']);
Route::get('/printer/hapus/{id}', 'App\Http\Controllers\PrinterCon@hapus')->middleware(['auth', 'verified']);

Route::get('/transaksi','App\Http\Controllers\TransaksiCon@index')->middleware(['auth', 'verified'])->name('transaksi');
Route::get('/transaksi/tambah', 'App\Http\Controllers\TransaksiCon@tambah')->middleware(['auth', 'verified']);
Route::post('/transaksi/storetambah', 'App\Http\Controllers\TransaksiCon@store')->middleware(['auth', 'verified']);
Route::get('/transaksi/edit/{id}', 'App\Http\Controllers\TransaksiCon@edit')->middleware(['auth', 'verified']);
Route::post('/transaksi/update', 'App\Http\Controllers\TransaksiCon@storeupdate')->middleware(['auth', 'verified']);
Route::get('/transaksi/hapus/{id}', 'App\Http\Controllers\TransaksiCon@hapus')->middleware(['auth', 'verified']);