<?php

use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
