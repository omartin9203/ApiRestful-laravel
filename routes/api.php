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
//Route::apiResource('productos', 'ProductController');
Route::middleware('auth:api')->resource('/productos', 'ProductController');
Route::post('user/register', 'Api\AuthController@register');
Route::post('user/login', 'Api\AuthController@login');
//Route::group(['before' => 'auth'], function () {
    
//});
//Route->apiResource('user/register', 'RegisterController');
//Route->apiResource('user/register', 'RegisterController');