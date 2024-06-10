<?php

use App\Http\Controllers\AuthProfessionalController;
use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\PersonalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register/aqui', [AuthProfessionalController::class, 'register']);
Route::post('login', [AuthProfessionalController::class, 'login'])->name('login');
Route::post('logout', [AuthProfessionalController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {

    Route::prefix('personal')->group(function () {
        Route::get('personals/{id}', [PersonalController::class, 'show']);
        Route::put('personals/{id}', [PersonalController::class, 'update']);
    });

    Route::prefix('exercise')->group(function () {
        Route::post('exercise/new', [ExercisesController::class, 'store']);
        Route::get('exercise/{id}', [ExercisesController::class, 'show']);
        Route::put('exercise/{id}', [ExercisesController::class, 'update']);
    });
});
