<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FighterController;
use App\Http\Controllers\MartialArtsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


// Route::group(['middleware' => ['scribe_routes']], function () {
//     Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//         return $request->user();
//     });


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', function (Request $request) {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    });
});
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::prefix('fighters')->group(function () {

    Route::get('/', [FighterController::class, 'index']);
    Route::post('/', [FighterController::class, 'store']);
    Route::get('/{fighter}', [FighterController::class, 'show']);
    Route::put('/{fighter}', [FighterController::class, 'update']);
    Route::delete('/{fighter}', [FighterController::class, 'destroy']);
});

Route::prefix('martial_arts')->group(function () {

    Route::get('/', [MartialArtsController::class, 'index']);
    Route::get('/{martial_art}', [MartialArtsController::class, 'show']);
});

Route::prefix('images')->group(function () {

    Route::get('/', [ImageController::class, 'index']);
    Route::get('/{image}', [ImageController::class, 'show']);
});
