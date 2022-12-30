<?php

use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai;
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

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/tambahdata', [PegawaiController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insert', [PegawaiController::class, 'insert'])->name('insert');
Route::get('/editdata/{id}', [PegawaiController::class, 'editdata'])->name('editdata');
Route::post('/update/{id}', [PegawaiController::class, 'update'])->name('update');
Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('delete');