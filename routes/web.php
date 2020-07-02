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
    return view('/items/data');
});

Route::get('/data_tables', function () {
    return view('/items/d_table');
});

Route::get('/master', function () {
    return view('/layout/master');
});

Route::get('/items', function () {
    return view('/items/index');
});
