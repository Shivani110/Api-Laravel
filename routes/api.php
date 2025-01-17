<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', [UsersController::class,'index']);
Route::post('users',[UsersController::class,'store']);
Route::get('users/{user}',[UsersController::class,'show']);
Route::put('users/{user}',[UsersController::class,'update']);
Route::delete('users/{user}',[UsersController::class,'destroy']);
Route::get('users/{user}',[UsersController::class,'search']);