<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);


Route::get('/pengguna', fn()=> view('pengguna.index'));
Route::get('/dashboard', fn()=> view('dashboard.index'));
Route::get('/kalender', fn()=> view('kalender.index'));
Route::get('/arsip', fn()=> view('arsip.index'));
Route::get('/setting', fn()=> view('settings.index'));
