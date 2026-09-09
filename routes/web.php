<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\RestaController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\MultiplicacionController;



Route::get('/', [SumaController::class, 'index']);
Route::post('/sumar', [SumaController::class, 'sumar']);
Route::get('/resta', [RestaController::class, 'index']);
Route::post('/restar', [RestaController::class, 'restar']);
Route::get('/division', [DivisionController::class, 'index']);
Route::post('/dividir', [DivisionController::class, 'dividir']);
Route::get('/multiplicacion', [MultiplicacionController::class, 'index']);
Route::post('/multiplicar', [MultiplicacionController::class, 'multiplicar']);
