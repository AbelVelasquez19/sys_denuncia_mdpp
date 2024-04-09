<?php

use App\Http\Controllers\DenunciaAmbiental;
use App\Http\Controllers\system\UserController;
use App\Http\Controllers\enviromental\EnviromentalController;
use App\Http\Controllers\enviromental\InfringementController;
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
Route::prefix('denuncia-ambiental')->group(function () {
    Route::get('/', [DenunciaAmbiental::class,'index'])->name('index');
    Route::post('/user-search', [UserController::class,'getUser']);
    Route::post('/add-enviromental', [EnviromentalController::class,'addEnviromental']);
});

Route::prefix('denuncia-infraccion')->group(function () {
    Route::get('/', [InfringementController::class,'index'])->name('infra-index');
});