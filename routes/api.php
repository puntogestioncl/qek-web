<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [ AuthController::class, 'login' ])->name('login');

Route::group([ 'namespace' => 'App\Http\Controllers', 'middleware' => 'auth:sanctum' ], function () {

    Route::apiResource('event',EventController::class);

});

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
