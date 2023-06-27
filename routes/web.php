<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/dosen', [MainController::class, 'dosen'])->name('dosen');
Route::get('/mata_kuliah', [MainController::class, 'mata_kuliah'])->name('mata_kuliah');
