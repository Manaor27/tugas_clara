<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RtController;
use App\Http\Controllers\KkController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RekapController;

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

Route::get('/', [BerandaController::class, 'index']);
Route::get('/tambahRt', [BerandaController::class, 'tambah']);
Route::get('/rt{id}', [RtController::class, 'index']);
Route::get('/tambahKk/rt{id}', [RtController::class, 'tambah']);
Route::get('/{id}kk{id2}', [KkController::class, 'index']);
Route::get('/tambahData{id}{id2}', [KkController::class, 'form']);
Route::post('/simpan{id}{id2}', [KkController::class, 'simpan']);
Route::get('/edit{id}{id2}{id3}', [KkController::class, 'edit']);
Route::put('/update{id}{id2}{id3}', [KkController::class, 'update']);
Route::get('rekap', [RekapController::class, 'index']);