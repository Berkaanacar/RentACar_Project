<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RenterController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/employee')->group(function () {
    Route::get('/show', [EmployeeController::class, 'index']);
    Route::post('/new', [EmployeeController::class, 'store']);
});
Route::prefix('/renter')->group(function () {
    Route::get('/show', [RenterController::class, 'index']);
    Route::post('/new', [RenterController::class, 'store']);
});
