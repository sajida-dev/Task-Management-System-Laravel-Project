<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;


Route::get('/', [TaskController::class,'index'])->name('task.taksList')->middleware('taskType:dd');
Route::get('/create-task', [TaskController::class,'create'])->name('task.createTask');
Route::post('/create', [TaskController::class,'store'])->name('task.submitTask');
Route::get('/task/{id}', [TaskController::class,'show','id'])->name('task.taskDetails');
Route::get('/edit-task/{id}', [TaskController::class,'edit','id'])->name('task.editTask')->middleware('role:admin');
Route::post('/update-task/{id}', [TaskController::class,'updateTask','id'])->name('task.update');
Route::get('/delete-task/{id}', [TaskController::class,'destroy','id'])->name('task.delete');

// login and register routes

Route::get('/register',[RegisterController::class,'create'])->name('register');
Route::get('/login',[LoginController::class,'create'])->name('login');
Route::post('sign-In',[LoginController::class,'store'])->name('sign-in');
Route::post('sign-Up',[RegisterController::class,'store'])->name('sign-up');

