<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\consultas\ConsultaController;
use App\Http\Controllers\DenunciaAmbiental;
use App\Http\Controllers\system\UserController;
use App\Http\Controllers\enviromental\EnviromentalController;
use App\Http\Controllers\enviromental\InfringementController;
use Illuminate\Support\Facades\Route;

Route::prefix('denuncia-ambiental')->group(function () {
    Route::get('/', [DenunciaAmbiental::class,'index'])->name('index');
    Route::post('/user-search', [UserController::class,'getUser']);
    Route::post('/add-enviromental', [EnviromentalController::class,'addEnviromental']);
});

Route::prefix('denuncia-infraccion')->group(function () {
    Route::get('/', [InfringementController::class,'index'])->name('infra-index');
    Route::post('/add-inspeccion', [InfringementController::class,'addInspeccion']);
});

Route::prefix('consultas')->group(function(){
    Route::get('/expedientes', [ConsultaController::class,'consultaExpediente'])->name('consulta.expediente');
    Route::get('/anno', [ConsultaController::class,'listaAnno']);
    Route::post('/buscar', [ConsultaController::class,'listaMovimientoExpediente']);
});

Route::prefix('api')->group(function(){
    Route::get('/notificacion-evento-funcionario', [ApiController::class,'notificacionEventoFuncionario']);
    Route::get('/notificacion-evento-administrado', [ApiController::class,'notificacionEventoAdministrado']);
    Route::get('/notificacion-evento-firma-pendiente', [ApiController::class,'notificacionEventoFirmaPendiente']);
    Route::get('/consulta-pide-sunat', [ApiController::class,'ejec_pide_sunat_api']);
    Route::get('/notificacion-seguridad-ciudadana', [ApiController::class,'notificacionSeguridadCiudadana']);
});