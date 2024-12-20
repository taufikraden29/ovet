<?php

use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

// Route Divisi
Route::resource('divisi', DivisiController::class);

// Route Arsip
Route::resource('arsip', ArsipController::class);

// Route Kalender
Route::resource('kalender', KalenderController::class);

// Route To-Do
Route::resource('todo', ToDoController::class);
Route::post('todo/{id}/status', [ToDoController::class, 'updateStatus'])->name('todo.updateStatus');

