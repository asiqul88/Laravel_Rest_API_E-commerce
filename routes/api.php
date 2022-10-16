<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ResultController;
use App\Http\Controllers\Api\Auth\AuthController;


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:api')->group(function () {

    Route::post('/result/{result}', [ResultController::class, 'result']);
    Route::post('/logout', [AuthController::class, 'logout']);
});








