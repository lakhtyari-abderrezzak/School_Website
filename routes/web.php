<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\DashboardControler;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Http\Middleware\StudentMiddleware;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', [DashboardControler::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('dashboard/teacher', [DashboardControler::class, 'teachers'])
    ->middleware(['auth', 'verified'])
    ->name('teachers');
Route::get('dashboard/administration', [DashboardControler::class, 'administration'])
    ->middleware(['auth', 'verified'])
    ->name('administration');
Route::get('dashboard/student', [DashboardControler::class, 'students'])
    ->middleware(['auth', 'verified'])
    ->name('students');
Route::get('dashboard/users', [DashboardControler::class, 'users'])
    ->middleware(['auth', 'verified'])
    ->name('users');
Route::resource('teachers', TeachersController::class)
    ->middleware(['auth', 'verified']);
Route::resource('administration', AdministrationController::class)
    ->middleware(['auth', 'verified']);
Route::resource('students', StudentController::class)
    ->middleware(StudentMiddleware::class);


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
