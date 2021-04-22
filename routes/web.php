<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/* FRONT */

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/batiments', [FrontController::class, 'batiments'])->name('batiments');
Route::get('/eleves', [FrontController::class, 'eleves'])->name('eleves');
Route::get('/formations', [FrontController::class, 'formations'])->name('formations');
Route::get('/typesdeformations', [FrontController::class, 'typesdeformations'])->name('typesdeformations');

Route::get('/admin', [FrontController::class, 'adminHome'])->name('adminHome');

/* BACK */
