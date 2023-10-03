<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
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


// Rute untuk menampilkan formulir pendaftaran
Route::get('/registrasi', [RegistrasiController::class, 'showForm']);

// Rute untuk menangani pendaftaran
Route::post('/registrasi', [RegistrasiController::class, 'prosesRegistrasi']);

Route::get('/', function () {
    return view('welcome');
});
