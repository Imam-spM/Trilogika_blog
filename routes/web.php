<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlumniController;

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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('layouts/admin');
})->name('admin');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('alumni', AlumniController::class);

Route::resource('artikel', ArtikelController::class);
