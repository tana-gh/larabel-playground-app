<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/users', UserAction::class);

Route::group(['middleware' => 'api'], function ($router) {
    Route::post('/users/login', User\LoginAction::class);
    Route::post('/users', User\RetrieveAction::class);
});
