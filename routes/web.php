<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChirpController;

Route::get('/', [ChirpController::class, 'index']);
Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);