<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\InstansiController;

// USER
Route::get('/', [UserController::class, 'index'])->name('user.home');
Route::get('/layanan', [UserController::class, 'layanan'])->name('user.layanan'); // Menampilkan data layanan dari CRUD di admin

// ADMIN
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/admin/instansi', InstansiController::class); 
});
