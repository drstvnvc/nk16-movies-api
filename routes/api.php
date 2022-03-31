<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('movies', [MovieController::class, 'index']);
Route::get('movies/{movie}', [MovieController::class, 'show']);
Route::post('movies', [MovieController::class, 'store'])->middleware('auth');
Route::put('movies/{movie}', [MovieController::class, 'update'])->middleware('auth');
Route::delete('movies/{movie}', [MovieController::class, 'destroy'])->middleware('auth');

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('refresh', [AuthController::class, 'refreshToken']);
Route::get('my-profile', [AuthController::class, 'getMyProfile'])->middleware('auth');
