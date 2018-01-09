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

/**
 * 前台路由组
 */
Route::get('/', 'IndexController@index');

Route::get('/tools/unixtime', 'ToolsController@unixtime');
Route::post('/tools/unixtimeAction', 'ToolsController@unixtimeAction');


