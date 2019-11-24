<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/requisition/export-requisition', 'RequisitionController@showExportForm');
Route::get('/requisition/import-requisition', 'RequisitionController@showImportForm');
Route::get('/requisition/depot-to-depot-requisition', 'RequisitionController@showDepotToDepotForm');
Route::get('/requisition/entire-factory-requisition', 'RequisitionController@showEntireFactoryForm');

Route::get('/requisition/demo-time-picker', 'RequisitionController@demo');
