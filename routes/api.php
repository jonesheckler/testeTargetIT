<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserApiController;
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



Route::get('/', function(){
    return response('OK - Funcionando', 200);
});




Route::prefix('v1')->middleware('apiJwt')->group(function () {
    Route::resource('/user', UserApiController::class);
});


Route::prefix('v1')->middleware('ApiJwtAdmin')->group(function () {
    Route::get('/all_user', [UserApiController::class, 'all']);
    Route::get('/all_user_with_address', [UserApiController::class, 'allWithAddress']);
});


Route::post('login', [AuthController::class, 'login']);

