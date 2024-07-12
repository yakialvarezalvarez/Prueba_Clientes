<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Midauth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login');
});

Route::post('auth', [AuthController::class, 'login']);//->middleware('mauth')
Route::post('validate-token', [AuthController::class, 'validateToken']);
Route::post('/token', [TokenController::class, 'store']);

Route::patch('destroy/{id}', [CustomerController::class, 'update']);


Route::resource('/customers', CustomerController::class);

Route::get('/create', [CustomerController::class, 'create']);

Route::post('destroy/{id}', [CustomerController::class, 'update']);

Route::post('/store', [CustomerController::class, 'store']);

