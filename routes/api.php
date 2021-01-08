<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\ApiCorralController;
use App\Http\Controllers\ApiAnimalController;

Route::get('/corral', [ApiCorralController::class, 'index']);
Route::post('/corral', [ApiCorralController::class, 'store']);
Route::post('/searchCorral', [ApiCorralController::class, 'showCorral']);
Route::get('/animal', [ApiAnimalController::class, 'index']);
Route::post('/animal', [ApiAnimalController::class, 'store']);
Route::post('/searchAnimalCorral', [ApiAnimalController::class, 'showAnimalCorral']);
Route::post('/averageAge', [ApiAnimalController::class, 'averageAge']);
Route::post('/quantityAnimalCorral', [ApiAnimalController::class, 'quantityAnimalCorral']);
