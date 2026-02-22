<?php

use App\Http\Controllers\Site\BienController;
use App\Http\Controllers\Site\ClientController;
use App\Http\Controllers\Site\DemandeVisiteController;
use App\Http\Controllers\Site\ProprietaireController;


Route::get('/', [BienController::class, 'index'])->name('home');
Route::get('/bien/{id}', [BienController::class, 'show'])->name('bien.show');
Route::post('/demande', [ClientController::class, 'store'])->name('demande.store');
Route::post('/visite', [DemandeVisiteController::class, 'store'])->name('visite.store');
Route::view('/a-propos', 'site.a-propos')->name('a-propos');
Route::get('/contact-proprietaire', [ProprietaireController::class, 'create'])->name('proprietaire.contact');
Route::post('/contact-proprietaire', [ProprietaireController::class, 'store'])->name('proprietaire.store');