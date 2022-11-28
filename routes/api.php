<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DrugController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\PharmacyController;
use \App\Http\Controllers\PharmacyDrugsController;


Route::get('showD', [DrugController::class, 'show']);
Route::post('createD', [DrugController::class, 'create']);
Route::put('updateD/{id}', [DrugController::class, 'update']);
Route::delete('deleteD/{id}', [DrugController::class, 'delete']);

Route::get('showO', [OrderController::class, 'show']);
Route::post('createO', [OrderController::class, 'create']);
Route::put('updateO/{id}', [OrderController::class, 'update']);
Route::delete('deleteO/{id}', [OrderController::class, 'delete']);

Route::get('showOD', [OrderController::class, 'show_d']);
Route::post('createOD', [OrderController::class, 'create_d']);
Route::put('updateOD/{id}', [OrderController::class, 'update_d']);
Route::delete('deleteOD/{id}', [OrderController::class, 'delete_d']);

Route::get('showP', [PharmacyController::class, 'show']);
Route::post('createP', [PharmacyController::class, 'create']);
Route::put('updateP/{id}', [PharmacyController::class, 'update']);
Route::delete('deleteP/{id}', [PharmacyController::class, 'delete']);

Route::get('showPD', [PharmacyDrugsController::class, 'show']);
Route::post('createPD', [PharmacyDrugsController::class, 'create']);
Route::put('updatePD/{id}', [PharmacyDrugsController::class, 'update']);
Route::delete('deletePD/{id}', [PharmacyDrugsController::class, 'delete']);

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
