<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::group(["prefix" => "records"], function () {
    Route::get('/', 'RecordController@index')->name('records.index');
    Route::post('/', 'RecordController@store')->name('records.store');
    Route::get('/{record}', 'RecordController@edit')->name('records.edit');
    Route::post('/{record}', 'RecordController@update')->name('records.update');
    Route::delete('/{record}', 'RecordController@destroy')->name('records.destroy');
});
