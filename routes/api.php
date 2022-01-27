<?php

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

Route::get('/User',[\App\Http\Controllers\Api\UserApiController::class,'index']);
Route::get('/Room',[\App\Http\Controllers\Api\RoomApiController::class,'index']);
Route::get('/Content',[\App\Http\Controllers\Api\ContentApiController::class,'index']);
Route::get('/Header',[\App\Http\Controllers\Api\HeaderApiController::class,'index']);
Route::get('/Body',[\App\Http\Controllers\Api\BodyApiController::class,'index']);
Route::get('/Footer',[\App\Http\Controllers\Api\FooterApiController::class,'index']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
 //   return $request->user();
// });

