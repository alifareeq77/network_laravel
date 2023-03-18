<?php

use App\Http\Controllers\api\ClientController;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\CommentsController;
use App\Http\Controllers\api\LikesController;
use App\Http\Controllers\api\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'social', 'namespace' => 'App\Http\Controllers\api'], function () {
    Route::apiResource('clients', UserController::class);
    Route::apiResource('posts', PostController::class);
    Route::apiResource('comments', CommentsController::class);
    Route::apiResource('likes', LikesController::class);
});


