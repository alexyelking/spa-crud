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

Route::group(["prefix" => "records", "as" => "records.", "controller" => "RecordController"], function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'create')->name('create');
    Route::get('/{record}', 'show')->name('show');
    Route::put('/{record}', 'update')->name('update');
    Route::delete('/{record}', 'destroy')->name('destroy');
});
