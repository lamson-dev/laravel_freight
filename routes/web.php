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

Route::get('partner', function () {
    return view('partner-management-dashboard.index-section');
});

Route::get('partner2', function () {
    return view('partner-management-dashboard.product-section');
});

Route::get('admin', function () {
    return view('admin-dashboard.admin-index-section');
});



