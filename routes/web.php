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