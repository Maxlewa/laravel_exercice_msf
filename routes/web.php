<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TypeformationController;
use Illuminate\Support\Facades\Route;

/* ____________________  FRONT ____________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/batiments', [FrontController::class, 'batiments'])->name('batiments');
Route::get('/eleves', [FrontController::class, 'eleves'])->name('eleves');
Route::get('/formations', [FrontController::class, 'formations'])->name('formations');
Route::get('/typesdeformations', [FrontController::class, 'typesdeformations'])->name('typesdeformations');

Route::get('/admin', [AdminController::class, 'adminHome'])->name('adminHome');
Route::get('/admin/batimentslist', [AdminController::class, 'batimentsList'])->name('batimentsList');
Route::get('/admin/eleveslist', [AdminController::class, 'elevesList'])->name('elevesList');
Route::get('/admin/formationslist', [AdminController::class, 'formationsList'])->name('formationsList');
Route::get('/admin/typeslist', [AdminController::class, 'typesList'])->name('typesList');

/* ____________________  BACK ____________________ */

// ----- BATIMENTS ----- //

// Create - Store

Route::get('/admin/batiments/create', [BatimentController::class, 'create'])->name('batiments.create');
Route::post('/admin/batiments/store', [BatimentController::class, 'store'])->name('batiments.store');

// Delete

Route::delete('/admin/batiments/{id}/delete', [BatimentController::class, 'destroy'])->name('batiments.destroy');

// Show

Route::get('/batiments/{id}', [BatimentController::class, 'show'])->name('batiments.show');

// Edit - Update

Route::get('/admin/batiments/{id}/edit', [BatimentController::class, 'edit'])->name('batiments.edit');
Route::put('/admin/batiments/{id}/update', [BatimentController::class, 'update'])->name('batiments.update');

// ----- ELEVES ----- //

// Create - Store

Route::get('/admin/eleves/create', [EleveController::class, 'create'])->name('eleves.create');
Route::post('/admin/eleves/store', [EleveController::class, 'store'])->name('eleves.store');

// Delete

Route::delete('/admin/eleves/{id}/delete', [EleveController::class, 'destroy'])->name('eleves.destroy');

// Show

Route::get('/eleves/{id}', [EleveController::class, 'show'])->name('eleves.show');

// Edit - Update

Route::get('/admin/eleves/{id}/edit', [EleveController::class, 'edit'])->name('eleves.edit');
Route::put('/admin/eleves/{id}/update', [EleveController::class, 'update'])->name('eleves.update');

// ----- FORMATIONS ----- //

// Create - Store

Route::get('/admin/formations/create', [FormationController::class, 'create'])->name('formations.create');
Route::post('/admin/formations/store', [FormationController::class, 'store'])->name('formations.store');

// Delete

Route::delete('/admin/formations/{id}/delete', [FormationController::class, 'destroy'])->name('formations.destroy');

// Show

Route::get('/formations/{id}', [FormationController::class, 'show'])->name('formations.show');

// Edit - Update

Route::get('/admin/formations/{id}/edit', [FormationController::class, 'edit'])->name('formations.edit');
Route::put('/admin/formations/{id}/update', [FormationController::class, 'update'])->name('formations.update');

// ----- TYPES FORMATIONS ----- //

// Create - Store

Route::get('/admin/types/create', [TypeformationController::class, 'create'])->name('types.create');
Route::post('/admin/types/store', [TypeformationController::class, 'store'])->name('types.store');

// Delete

Route::delete('/admin/types/{id}/delete', [TypeformationController::class, 'destroy'])->name('types.destroy');

// Show

Route::get('/types/{id}', [TypeformationController::class, 'show'])->name('types.show');

// Edit - Update

Route::get('/admin/types/{id}/edit', [TypeformationController::class, 'edit'])->name('types.edit');
Route::put('/admin/types/{id}/update', [TypeformationController::class, 'update'])->name('types.update');

