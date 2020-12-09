<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', 'App\Http\Controllers\TestController@index');
Route::get('/database_view', 'App\Http\Controllers\DatabaseController@database_view');
Route::post('/database_actions_territory', 'App\Http\Controllers\DatabaseController@database_actions_territory');
Route::post('/database_actions_sales_rep', 'App\Http\Controllers\DatabaseController@database_actions_sales_rep');
Route::post('/database_actions_customer', 'App\Http\Controllers\DatabaseController@database_actions_customer');
Route::post('/database_actions_vendor', 'App\Http\Controllers\DatabaseController@database_actions_vendor');
Route::post('/database_actions_item', 'App\Http\Controllers\DatabaseController@database_actions_item');
Route::post('/database_actions_order', 'App\Http\Controllers\DatabaseController@database_actions_order');