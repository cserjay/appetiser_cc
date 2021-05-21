<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getsettings', 'SettingsController@getSettings');
Route::get('getsetting/{id}', 'SettingsController@getSettingsById');

// Save event
Route::post('savesettings', 'SettingsController@saveSettings');
Route::put('updatesettings/{id}', 'SettingsController@updateSettings');