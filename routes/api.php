<?php

use Illuminate\Support\Facades\Route;

Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('blogs/{id}', [\App\Http\Controllers\BlogController::class, 'show']);
Route::post('blogs', [\App\Http\Controllers\BlogController::class, 'store']);
Route::put('blogs/{id}', [\App\Http\Controllers\BlogController::class, 'update']);
Route::delete('blogs/{id}', [\App\Http\Controllers\BlogController::class, 'delete']);
