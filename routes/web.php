<?php

use App\Http\Controllers\Site\BienController;
use App\Http\Controllers\Site\ClientController;
use App\Http\Controllers\Site\DemandeVisiteController;
use App\Http\Controllers\Site\ProprietaireController;

Route::view('/', 'site.acceuil')->name('acceuil');
Route::get('/bien', [BienController::class, 'index'])->name('bien');
Route::get('/bien/{id}', [BienController::class, 'show'])->name('bien.show');
Route::post('/demande', [ClientController::class, 'store'])->name('demande.store');
Route::post('/visite', [DemandeVisiteController::class, 'store'])->name('visite.store');
Route::get('/contact', [ProprietaireController::class, 'create'])->name('proprietaire.contact');
Route::post('/contact-proprietaire', [ProprietaireController::class, 'store'])->name('proprietaire.store');