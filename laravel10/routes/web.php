<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\memberController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\petugasController;

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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/cektemplate', function () {
    return view('layouts.template');
});





Auth::routes();

//MEMBER
Route::get('/member', [memberController::class, 'index']);
Route::get('/member/tambah', [memberController::class, 'create'])->name('member.create');
Route::post('/member', [memberController::class, 'store'])->name('member.store');
Route::resource('member', memberController::class);
Route::get('/member/edit/{id}', [memberController::class, 'edit']);
Route::put('/member/{id}', [memberController::class, 'update']);


//PENDAFTARAN
Route::get('/pendaftaran', [pendaftaranController::class, 'index']);
Route::get('/pendaftaran/tambah', [pendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [pendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::resource('pendaftaran', pendaftaranController::class);
Route::get('/pendaftaran/edit/{id}', [pendaftaranController::class, 'edit']);
Route::put('/pendaftaran/{id}', [pendaftaranController::class, 'update']);


//PETUGAS
Route::get('/petugas', [petugasController::class, 'index']);
Route::get('/petugas/tambah', [petugasController::class, 'create'])->name('petugas.create');
Route::post('/petugas', [petugasController::class, 'store'])->name('petugas.store');
Route::resource('petugas', petugasController::class);
Route::get('/petugas/edit/{id}', [petugasController::class, 'edit']);
Route::put('/petugas/{id}', [petugasController::class, 'update']);


// routes/web.php
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);




