<?php

use App\Http\Controllers\Api\CarsApiController;
use App\Http\Controllers\Api\UserApiController;
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
Route::get('user', [UserApiController::class, 'index']);
Route::get('user/{id}', [UserApiController::class, 'getById']);
Route::get('user/{id}/car/set/{carId}', [UserApiController::class, 'setCar']);
Route::get('cars', [CarsApiController::class, 'index']);
Route::get('cars/{id}', [CarsApiController::class, 'getById']);
Route::get('cars/user/get/{userId}', [CarsApiController::class, 'getUserById']);
