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


Route::group(['prefix' => 'user'], function () {

    Route::get('index', [
        'as' => 'selectType',
        'uses' => 'CustomerController@selectType'
    ]);

    Route::get('calculate', [
        'as' => 'user/calculate',
        'uses' => 'CustomerController@calculateFee'
    ]);

    Route::get('showdetail/vehicle/{vehicleID}/distance/{distance}', [
        'as' => 'show',
        'uses' => 'CustomerController@showDetail'
    ]);

    Route::post('bookservice', [
        'as' => 'book',
        'uses' => 'CustomerController@bookService'
    ]);

});


//routes of Partner

Route::group(['prefix' => 'partner'], function () {

    Route::get('showIndex', [
        'as' => 'getIndexPartner',
        'uses' => 'VehicleControlle@index'
    ]);
    
    Route::get('ShowVehicle', [
        'as' => 'getVehicle',
        'uses' => 'VehicleControlle@getVehicleView'
    ]);

    Route::get('add',[
        'as'=>'addVehicle',
            'uses'=>'VehicleControlle@getAddVehicle'
    ]);
        

    Route::post('add',[
        'as'=>'postaddVehicel',
            'uses'=>'VehicleControlle@postaddVehicle'
    ]);
         
    Route::get('update/{vehicleID}',[
        'as'=>'getupdate',
        'uses'=>'VehicleControlle@getUpdate'
      ]);
      
    Route::post('update/{vehicleID}',[
        'as'=>'postupdate',
        'uses'=>'VehicleControlle@postUpdate'
    ]);

    Route::get('delete/{vehicleID}',[
        'as'=>'getdelete',
        'uses'=>'VehicleControlle@getdelete'
    ]);
});

























Route::post('partner/add-vehicle',[
   'as'=>'partnerInsertVehicle',
    'uses'=>'PartnerController@addVehicle'
]);

//Route::post('partner/insert-vehicle',[
//   'as'=>'partnerInsertVehicle',
//    'uses'=>'PartnerController@addVehicle'
//]);
//routes of Admin

Route::get('admin',[
    'as'=> 'getIndexAdmin',
    'uses'=> 'AdminController@index',
]);

Route::get('admin/add-partner',[
    'as'=> 'adminAddPartner',
    'uses'=> 'AdminController@addPartner',
]);

Route::get('admin/delete-partner{partnerId}',[
    'as'=> 'adminDeletePartner',
    'uses'=> 'AdminController@deletePartner',
]);

