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
Route::post('/database_actions_part', 'App\Http\Controllers\DatabaseController@database_actions_part');
Route::post('/database_actions_order', 'App\Http\Controllers\DatabaseController@database_actions_order');
Route::post('/database_actions_order_part', 'App\Http\Controllers\DatabaseController@database_actions_order_part');
Route::post('/database_actions_order_status', 'App\Http\Controllers\DatabaseController@database_actions_order_status');
Route::get('/database_view_invoice/{id}', 'App\Http\Controllers\DatabaseController@database_view_invoice');
Route::get('/database_view_territory_list', 'App\Http\Controllers\DatabaseController@database_view_territory_list');
Route::get('/database_view_customer_master_list', 'App\Http\Controllers\DatabaseController@database_view_customer_master_list');
Route::get('/database_view_customer_mailing_labels', 'App\Http\Controllers\DatabaseController@database_view_customer_mailing_labels');