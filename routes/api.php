<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonReponse;

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

Route::get('/user', function (Request $request) {
    return new \Illuminate\Http\JsonReponse([
        'data' => 'test string response'
    ]);
});

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return 'test success';
    //return $request->user();
});
*/
