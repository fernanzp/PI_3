<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonacionController;

Route::get('/', HomeController::class);

Route::get('/login', [HomeController::class, 'login_register']);

// Route::get('/numero/{numero}', [HomeController::class, 'numero']);

Route::post('/guardar-transaccion', [DonacionController::class, 'guardarTransaccion']);


Route::get('/gracias/{transaction_id}', [HomeController::class, 'gracias']);

