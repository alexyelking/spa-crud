<?php

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

Route::group(["prefix" => "records", "as" => "record."], function () {
    Route::get('/', 'RecordController@index')->name('index');
    Route::post('/', 'RecordController@create')->name('create');
    Route::post('/{record}', 'RecordController@update')->name('update');
    Route::delete('/{record}', 'RecordController@destroy')->name('destroy');
});
