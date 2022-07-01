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

Route::get('/user', function () {
    $user = User::create([
        'type' => 'test_test'
    ]);
    return $user;
});

Route::get('/internal-user', function () {
    $internal_user = InternalUser::create([
        'username' => 'test_username',
        'email_address' => 'test_email@mail.com',
        'first_name' => 'First',
        'surname' => 'Last'
    ]);
    return $internal_user;
});

#Route::get('/user', 'UserController@index');
#Route::post('/user', 'UserController@store');
#Route::put('/user', 'UserController@update');
#Route::delete('/user', 'UserController@destroy');

/*
Route::get('/user', function (Request $request) {
    return 'test string response';
    /*
    return new \Illuminate\Http\JsonReponse([
        'data' => 'test string response'
    ]);
    * /
});
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return 'test success';
    //return $request->user();
});
*/
