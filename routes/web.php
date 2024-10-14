<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\EnsureUserRole;


Route::redirect('/', "/login");


// registration page
Route::get('/registration', [AuthController::class, 'registration'])->name('user.registration');
Route::post('/signUp', [AuthController::class, 'signUp'])->name('user.signUp');

// login page
Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/signIn', [AuthController::class, 'signIn'])->name('user.signIn');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

// dashboard for all authenticated users
Route::middleware(['auth'])->group(function () {
    // dashboard
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    
    // reports page
    Route::get('/reports', [ReportController::class, 'index'])->name('reports')->middleware(EnsureUserRole::class.':owner/employee');

    // config page
    Route::get('/config', [PageController::class, 'config_page'])->name('config')->middleware(EnsureUserRole::class.':owner/admin');
});