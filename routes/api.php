<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\FinanceController;

  Route::get('/users', [UserController::class,'index']);

  Route::get('/finance', [FinanceController::class,'store']);