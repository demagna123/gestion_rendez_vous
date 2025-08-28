<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MainController;

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/base1', [MainController::class, 'base1'])->name('base1');
Route::get('/base2', [MainController::class, 'base2'])->name('base2');
Route::get('/base3', [MainController::class, 'base3'])->name('base3');
Route::get('/', [MainController::class, "home"] )->name ('home');

Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::resource('admin', AdminController::class);
// Route::resource('doctors', DoctorController::class);
// Route::resource('patients', PatientController::class);
// Route::resource('consultations', ConsultationController::class);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('admin', AdminController::class);
});

Route::middleware(['auth', 'role:doctor'])->group(function () {
    Route::resource('doctors', DoctorController::class);
});

Route::middleware(['auth', 'role:patient'])->group(function () {
    Route::resource('patients', PatientController::class);
});