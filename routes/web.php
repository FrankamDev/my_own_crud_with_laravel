<?php

use App\Http\Controllers\ElevesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/eleves', [ElevesController::class, 'index'])->name('eleves.index');
Route::get('/eleves/create', [ElevesController::class, 'create'])->name('eleves.create');
Route::post('/eleves', [ElevesController::class, 'store'])->name('eleves.store');

Route::get('/eleves/{id}', [ElevesController::class, 'show'])->name('eleves.show');

Route::delete('/eleves/{id}', [ElevesController::class, 'destroy'])->name('eleves.destroy');


Route::get('/eleves/{id}/edit', [ElevesController::class, 'edit'])->name('eleves.edit');
Route::put('/eleves/{id}', [ElevesController::class, 'update'])->name('eleves.update');
