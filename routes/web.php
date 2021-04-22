<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/* FRONT */

Route::get('/', [FrontController::class, 'home'])->name('home');

/* BACK */
