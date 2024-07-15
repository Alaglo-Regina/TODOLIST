<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'store']);
Route::patch('/{todo}', [TodoController::class, 'update']);
Route::delete('/{todo}', [TodoController::class, 'destroy']);
