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

//routes of Partner
Route::get('partner', [
    'as' => 'getIndexPartner',
    'uses' => 'PartnerController@index'
]);

Route::get('partner/vehicle', [
    'as' => 'partnerVehicle',
    'uses' => 'PartnerController@getVehicleView'
]);

Route::get('partner/account',[
  'as'=>'partnerAccount',
  'uses'=>'PartnerController@getAccountView'
]);

Route::get('partner/add-vehicle',[
   'as'=>'partnerAddVehicle',
    'uses'=>'PartnerController@getAddVehicleView'
]);

//routes of Admin

Route::get('admin',[
    'as'=> 'getIndexAdmin',
    'uses'=> 'AdminController@index',
]);

Route::get('admin/add-partner',[
    'as'=> 'getIndexAdmin',
    'uses'=> 'AdminController@addPartner',
]);

Route::get('admin/delete-partner{partnerId}',[
    'as'=> 'getIndexAdmin',
    'uses'=> 'AdminController@deletePartner',
]);

