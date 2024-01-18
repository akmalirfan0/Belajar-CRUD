<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PegawaiController;

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

Route::get('/data-pegawai', [PegawaiController::class, 'index'])->name('data-pegawai.index');
Route::get('/create-pegawai', [PegawaiController::class, 'create'])->name('create-pegawai');
Route::get('/data-pegawai/create-pegawai', [PegawaiController::class, 'create'])->name('data-pegawai.create');
Route::post('/data-pegawai', [PegawaiController::class, 'store'])->name('data-pegawai.store');
Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai');
Route::post('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('edit-pegawai.update');
Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai');
