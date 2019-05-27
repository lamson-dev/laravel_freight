<?php

use Illuminate\Support\Facades\Hash;

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

Route::get('admin/managing-partner',[
  'as' => 'adminManagingPartner',
  'uses' => 'AdminController@getAddPartner'  
]);

Route::post('admin/add-partner',[
    'as'=> 'adminAddPartner',
    'uses'=> 'AdminController@postAddPartner'
]);

Route::get('admin/delete-partner{partnerId}',[
    'as'=> 'adminDeletePartner',
    'uses'=> 'AdminController@deletePartner'  
]);

Route::get('admin/list-partner',[
    'as'=> 'adminListPartner',
    'uses'=> 'AdminController@getListPartner'
]);

//login
Route::get('admin/login',[
    'as'=> 'getLoginAdmin',
    'uses'=> 'AdminController@getLoginAdmin'
]);

Route::post('admin/login',[
    'as'=> 'postLoginAdmin',
    'uses'=> 'AdminController@postLoginAdmin'
]);

//logout
Route::get('admin/logout',[
    'as'=> 'getLogoutAdmin',
    'uses'=> 'AdminController@logout'
]);


// Delete partners
Route::get('delete/{partID}',[
    'as'  => 'getDeletePartner',
    'uses'  => 'AdminController@getDeletePartner'
]);




// TEST HASH PASSWORD
Route::get('hash/{password}',[
    'as'  => 'testHash',
    function($password) {
      return Hash::make($password);
    }
]);