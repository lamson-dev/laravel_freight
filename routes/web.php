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


Route::group(['prefix' => 'user'], function () {

    Route::get('index', [
        'as' => 'selectType',
        'uses' => 'CustomerController@selectType'
    ]);

    Route::get('calculate', [
        'as' => 'user/calculate',
        'uses' => 'CustomerController@calculateFee'
    ]);

    Route::get('showDetail/{vehicle}/{distance}', [
        'as' => 'show',
        'uses' => 'CustomerController@showDetail'
    ]);


    Route::post('bookService', [
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


<<<<<<< HEAD



=======
Route::get('partner/account', [
    'as' => 'partnerAccount',
    'uses' => 'PartnerController@getAccountView'
]);

Route::get('partner/g-vehicle-type', [
    'as' => 'partnerAddVehicleType',
    'uses' => 'PartnerController@getAddVehicleTypeView'
]);

Route::post('partner/add-vehicle-type', [
    'as' => 'partnerInsertVehicleType',
    'uses' => 'PartnerController@addVehicleType'
]);

Route::get('partner/g-vehicle', [
    'as' => 'partnerAddVehicle',
    'uses' => 'PartnerController@getAddVehicleView'
]);
>>>>>>> 5a1c07d8219c5cb15b919696b06c973b9cd70bec




















Route::post('partner/add-vehicle', [
    'as' => 'partnerInsertVehicle',
    'uses' => 'PartnerController@addVehicle'
]);

//Route::post('partner/insert-vehicle',[
//   'as'=>'partnerInsertVehicle',
//    'uses'=>'PartnerController@addVehicle'
//]);
//routes of Admin

Route::get('admin', [
    'as' => 'getIndexAdmin',
    'uses' => 'AdminController@index',
]);

Route::get('admin/managing-partner', [
    'as' => 'adminManagingPartner',
    'uses' => 'AdminController@getAddPartner'
]);

Route::post('admin/add-partner', [
    'as' => 'adminAddPartner',
    'uses' => 'AdminController@postAddPartner'
]);
//thiet:admin partner
Route::get('admin/add-partner', [
    'as' => 'adminAddPartner',
    'uses' => 'AdminController@addPartner',
]);

Route::get('admin/delete-partner{partnerId}', [
    'as' => 'adminDeletePartner',
    'uses' => 'AdminController@deletePartner'
]);

Route::get('admin/list-partner', [
    'as' => 'adminListPartner',
    'uses' => 'AdminController@getListPartner'
]);


//login
Route::get('admin/login', [
    'as' => 'getLoginAdmin',
    'uses' => 'AdminController@getLoginAdmin'
]);

Route::post('admin/login', [
    'as' => 'postLoginAdmin',
    'uses' => 'AdminController@postLoginAdmin'
]);

//logout
Route::get('admin/logout', [
    'as' => 'getLogoutAdmin',
    'uses' => 'AdminController@logout'
]);


// Delete partners
Route::get('delete/{partID}', [
    'as' => 'getDeletePartner',
    'uses' => 'AdminController@getDeletePartner'
]);
// });
Route::get('/', [
    'as' => 'home',
    'uses' => 'CustomerController@selectType'
]);



// TEST HASH PASSWORD
Route::get('hash/{password}', [
    'as' => 'testHash',
    function($password) {
        return Hash::make($password);
    }
]);

Route::get('booking-detail/{id}',[
  'as'=>'BookingDetail',
  'uses'=>'PartnerController@getBookingDetail'
]);
Route::post('confirm-booking',[
  'as'=>'ConfirmBooking',
  'uses'=>'PartnerController@postConfirmBooking'
]);
