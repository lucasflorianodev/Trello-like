<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\ListController; // Ensure this class exists in the specified namespace
use App\Http\Controllers\CardController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/boards', [BoardController::class, 'index']);
    Route::post('/boards', [BoardController::class, 'store']);
    Route::delete('/boards/{board}', [BoardController::class, 'destroy']);

    Route::post('/boards/{board}/lists', [ListController::class, 'store']);

    Route::post('/lists/{list}/cards', [CardController::class, 'store']);
});