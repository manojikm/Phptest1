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

Route::post('v1/saveLicense', 'Test\LicenseController@saveLicense');
Route::post('v1/getLicense', 'Test\LicenseController@getLicense');
 
Route::delete('v1/deleteLicense/{id}', 'Test\LicenseController@destroy');
Route::get('v1/viewLicense/{id}', 'Test\LicenseController@index');
Route::put('v1/updateLicense', 'Test\LicenseController@update');
 