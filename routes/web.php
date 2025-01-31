<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\DashboardControler;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\StudentMiddleware;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', [DashboardControler::class, 'index'])
    ->middleware(['auth', 'verified', 'isAdmin'])
    ->name('dashboard');
Route::patch('status/{id}', [UserController::class, 'status'])
    ->middleware(['auth', 'verified', 'isAdmin'])
    ->name('users.status');
Route::get('dashboard/teacher', [DashboardControler::class, 'teachers'])
    ->middleware(['auth', 'verified', 'isAdmin'])
    ->name('teachers');
Route::get('dashboard/classes', [DashboardControler::class, 'classes'])
    ->middleware(['auth', 'verified', 'isAdmin'])
    ->name('classes');
Route::get('dashboard/administration', [DashboardControler::class, 'administration'])
    ->middleware(['auth', 'verified', 'isAdmin'])
    ->name('administration');
Route::get('dashboard/student', [DashboardControler::class, 'students'])
    ->middleware(['auth', 'verified', 'isAdmin'])
    ->name('students');
Route::get('dashboard/users', [DashboardControler::class, 'users'])
    ->middleware(['auth', 'verified', 'isAdmin'])
    ->name('users');
Route::resource('teachers', TeacherController::class)
    ->middleware(['auth', 'verified', 'isAdmin']);
Route::resource('administration', AdministrationController::class)
    ->middleware(['auth', 'verified', 'isAdmin']);
Route::resource('students', StudentController::class)
    ->middleware(StudentMiddleware::class);
Route::resource('subjects', SubjectController::class)
    ->middleware(['auth', 'verified', 'isAdmin']);


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
