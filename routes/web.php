<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AadharController;

Route::get('/', [AuthController::class, 'showRegister'])->name('register');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/update-aadhar', [AadharController::class, 'showUpdateAadhar'])->name('update-aadhar');
    Route::post('/update-aadhar', [AadharController::class, 'updateAadhar']);
});