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

<<<<<<< HEAD
/* Route::get('partner', function () {
  return view('partner-management-dashboard.index-section');
  });

  Route::get('partner2', function () {
  return view('partner-management-dashboard.product-section');
  }); */


/*Route::group(['prefix'=>'partner','as'=>'partner.'], function() {
    Route::get('/', [
        'as' => 'getIndex',
        'uses' => 'PartnerController@index'
    ]);

    Route::get('vehicle', [
        'as' => 'vehicle',
        'uses' => 'PartnerController@getVehicleView'
    ]);

    Route::get('vehicle1', function () {
        return view('welcome');
    });
//    Route::get('index', [
//        'as' => 'getIndex',
//        'uses' => 'PartnerController@index'
//    ]);
//    Route::get('index', [
//        'as' => 'getIndex',
//        'uses' => 'PartnerController@index'
//    ]);
});*/



Route::get('partner', [
    'as' => 'getIndex',
    'uses' => 'PartnerController@index'
]);

Route::get('partner/vehicle', [
    'as' => 'vehicle',
    'uses' => 'PartnerController@getVehicleView'
]);

Route::('partner/account',[
  'as'=>'account',
  'use'=>'PartnerController@'
]);


//    Route::get('index', [
//        'as' => 'getIndex',
//        'uses' => 'PartnerController@index'
//    ]);
//    Route::get('index', [
//        'as' => 'getIndex',
//        'uses' => 'PartnerController@index'
//    ]);


Route::prefix('admin')->group(function() {

});

Route::prefix('customer')->group(function() {

=======
/*Route::get('partner', function () {
    return view('partner-management-dashboard.index-section');
});

Route::get('partner2', function () {
    return view('partner-management-dashboard.product-section');
});*/


Route::prefix('partner')->group(function() {
    
});

Route::prefix('admin')->group(function() {
    
});

Route::prefix('customer')->group(function() {
    
>>>>>>> 7772994154dba001481b2c0c110353d37d0926ac
});
