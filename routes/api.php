<?php

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

Route::group([

    'prefix' => 'auth',

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([

    'prefix' => 'auth/boss',

], function () {

    Route::post('login', 'BossAuthController@loginBoss');
    Route::post('logout', 'BossAuthController@logoutBoss');
    Route::post('refresh', 'BossAuthController@refresh');
    Route::post('me', 'BossAuthController@boss');

});
