<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
Route::get('/', [TestController::class, 'home'])->name('home');
Route::get('/pendataan', [TestController::class,
'data'])->name('pendataan');
Route::get('/data/{nama}', [TestController::class,
'datanama'])->name('data-nama');
Route::get('/daftar', [TestController::class,
'daftar'])->name('daftar');
Route::post('/kirim', [TestController::class,
'kirim'])->name('kirim');
Route::get('/', [DashboardController::class,
'home'])->name('home');
Route::get('/about', [DashboardController::class,
'about'])->name('about');
