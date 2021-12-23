<?php

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
    return response('OK', 200);
});



Route::prefix('v1')
    ->namespace('Api')
    //->middleware('auth:api')
    ->group(function () {

        Route::get('/', function(){
            return response('OK', 200);
        });

        Route::get('/user',  [UserApiController::class, 'index'])->name('show.user');

        
    });





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
