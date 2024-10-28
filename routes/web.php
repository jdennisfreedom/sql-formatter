<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SQLFormatterController;

Route::get('/', [SQLFormatterController::class, 'index']);
Route::post('/format', [SQLFormatterController::class, 'format']);

