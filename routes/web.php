<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/people', [PersonController::class, 'index'])->name('people.index');

Route::get('/people/create', [PersonController::class, 'create'])->name('people.create');

Route::post('/people', [PersonController::class, 'store'])->name('people.store');

Route::get('/people/{id}', [PersonController::class, 'show'])->name('people.show');

Route::get('/people/{id}/edit', [PersonController::class, 'edit'])->name('people.edit');

Route::put('/people/{id}', [PersonController::class, 'update'])->name('people.update');

Route::delete('/people/{id}', [PersonController::class, 'destroy'])->name('people.destroy');