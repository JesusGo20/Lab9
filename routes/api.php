<?php

use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NumberController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/suma/{num1}/{num2}', [NumberController::class, 'suma']);
Route::get('/multi/{num1}/{num2}', [NumberController::class, 'multiplicacion']);
