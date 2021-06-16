<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanBakuApiController;

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

Route::get('/bahan_baku', [BahanBakuApiController::class, 'index']);
Route::post('/bahan_baku', [BahanBakuApiController::class, 'store']);
Route::patch('/bahan_baku/{id}', [BahanBakuApiController::class, 'update']);
Route::delete('/bahan_baku/{id}', [BahanBakuApiController::class, 'delete']);
