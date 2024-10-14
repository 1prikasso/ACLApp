<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReportController;

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


// registration page
Route::get('/registration', [AuthController::class, 'registration'])->name('user.registration');
Route::post('/signUp', [AuthController::class, 'signUp'])->name('user.signUp');

// login page
Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/signIn', [AuthController::class, 'signIn'])->name('user.signIn');

Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

Route::redirect('/', "/login");

// dashboard for all authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    
    Route::get('/config', [PageController::class, 'config_page'])->name('config');
});

    

Route::get('/config', [PageController::class, 'dashboard'])->name('dashboard');