<?php

use App\Http\Controllers\Api\AuthUser;
use App\Http\Controllers\Api\getUser;
use App\Http\Controllers\Api\RegisterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [AuthUser::class, 'login']);
Route::post('logout/{id}', [AuthUser::class, 'logout']);
Route::post('register', [RegisterUser::class, 'register']);
