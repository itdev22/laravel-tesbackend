<?php

use App\Http\Controllers\tes4\tesController;
use App\Http\Controllers\tes5\tesController as Tes5TesController;
use App\Http\Controllers\tes6\tesController as Tes6TesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('tes4')->name('tes4.')->group(function () {
    Route::get('/', [tesController::class, 'index'])->name('index');
    Route::post('/', [tesController::class, 'store'])->name('store');
});

Route::prefix('tes6')->name('tes6.')->group(function () {
    Route::get('/', [Tes6TesController::class, 'index'])->name('index');
    Route::post('/', [Tes6TesController::class, 'store'])->name('store');
});
