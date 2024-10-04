<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('layouts/admin');
})->name('admin');

Route::get('/dashboard', function () {
    return view('layouts/dashboard');
})->name('dashboard');

// Route untuk halaman landing page
// Route::get('/', [ArtikelController::class, 'welcome'])->name('home');

Route::resource('alumni', AlumniController::class);

Route::resource('artikel', ArtikelController::class);

Route::get('/jumbotron/create', [JumbotronController::class, 'create'])->name('jumbotron.create');
Route::post('/jumbotron', [JumbotronController::class, 'store'])->name('jumbotron.store');
Route::get('/jumbotron', [JumbotronController::class, 'index'])->name('jumbotron.index');
Route::get('/jumbotron/{id}', [JumbotronController::class, 'show'])->name('jumbotron.show');
Route::get('/jumbotron/{jumbotron}/edit', [JumbotronController::class, 'edit'])->name('jumbotron.edit');
Route::put('/jumbotron/{jumbotron}', [JumbotronController::class, 'update'])->name('jumbotron.update');


