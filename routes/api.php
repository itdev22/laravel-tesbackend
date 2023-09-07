<?php

use App\Http\Controllers\tes4\tesController;
use App\Http\Controllers\tes5\tesController as Tes5TesController;
use App\Http\Controllers\tes6\tesController as Tes6TesController;
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

Route::prefix('tes4')->name('tes5.')->group(function () {
    Route::post('/', [tesController::class, 'store'])->name('store');
});
Route::prefix('tes5')->name('tes5.')->group(function () {
    Route::post('/', [Tes5TesController::class, 'store'])->name('store');
});
Route::prefix('tes6')->name('tes6.')->group(function () {
    Route::post('/', [Tes6TesController::class, 'store'])->name('store');
});
