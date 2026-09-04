<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
Route::get('/', [SumaController::class, 'index']);
Route::post('/sumar', [SumaController::class, 'sumar']);
