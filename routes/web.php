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

Route::get('partner/g-vehicle-type',[
    'as'=>'partnerAddVehicleType',
    'uses'=>'PartnerController@getAddVehicleTypeView'
]);

Route::post('partner/add-vehicle-type',[
   'as'=>'partnerInsertVehicleType',
    'uses'=>'PartnerController@addVehicleType'
]);

Route::get('partner/g-vehicle',[
'as'=>'partnerAddVehicle',
    'uses'=>'PartnerController@getAddVehicleView'
]);




















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

Route::get('admin/managing-partner',[
  'as' => 'adminManagingPartner',
  'uses' => 'AdminController@getAddPartner'  
]);

Route::post('admin/add-partner',[
    'as'=> 'adminAddPartner',
    'uses'=> 'AdminController@postAddPartner'
]);
//thiet:admin partner
Route::get('admin/add-partner',[
    'as'=> 'adminAddPartner',
    'uses'=> 'AdminController@addPartner',

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
// });




// TEST HASH PASSWORD
Route::get('hash/{password}',[
    'as'  => 'testHash',
    function($password) {
      return Hash::make($password);
    }
]);

