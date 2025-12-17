<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animals')->group(function () {
    Route::get('/creer', [AnimalController::class, 'create'])->name('animal.create');
    Route::get('/modifier/{animal}', [AnimalController::class, 'update'])->name('animal.update');
    Route::get('/supprimer/{animal}', [AnimalController::class, 'destroy'])->name('animal.delete');
    Route::get('/{animal}', [AnimalController::class, 'show'])->name('animal.show');
});
