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

/**
 * Defined routes for Calculator
 */
Route::group(['middleware' => ['apiauth']], function () {
    Route::get('users/listall', 'UsersApiController@listAllAction')->name('users.apilistall')->middleware('apiauth');
    Route::get('users/list', 'UsersApiController@listAction')->name('users.apilist')->middleware('apiauth');
});

