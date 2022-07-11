<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonReponse;
use App\User;
use App\InternalUser;

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

Route::resource('user', 'UserController');
Route::resource('internal-user', 'InternalUserController');
Route::resource('external-user', 'ExternalUserController');

Route::post('/login', 'InternalUserLoginController@login');

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return 'test success';
    //return $request->user();
});
*/
