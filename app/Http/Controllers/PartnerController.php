<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Partner;
use App\Bill;
class PartnerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $bill = Bill::all();
        return view('partner-management-dashboard.index-section',[
            'bill'=>$bill
        ]);
       
    }

    public function getVehicleView() {
        $vehicle_type = DB::table('type_vehicles')->select('type')->get();
        $vehicle = DB::table('vehicles')->get();
        return view('partner-management-dashboard.vehicle-section', [
            'vehicle_type' => $vehicle_type,
            'vehicle' => $vehicle
        ]);
    }

    public function getAccountView() {
        return view('partner-management-dashboard.account-section');
    }

    public function getAddVehicleView() {
        $vehicle_type = DB::table('type_vehicles')->get();
        //temp
        $partner = DB::table('partners')->get();
        return view('partner-management-dashboard.add-vehicle-section', [
            'vehicle_type' => $vehicle_type,
            'partner' => $partner
        ]);
    }

    public function addVehicle(Request $request) {
        $name = $request->input('vehicle_brand');
        $des = $request->input('description');
        $type = $request->input('typeVehicle');
        $partner = $request->input('Partner');
        $image = "";
        DB::table('vehicles')->insert(
                [
                    'brand' => $name,
                    'partID' => $partner,
                    'description' => $des,
                    'type_vehicleID' => $type,
                    'image' => $image
                ]
        );
        return back();
    }

    public function getAddVehicleTypeView() {
        return view('partner-management-dashboard.add-vehicle-type-section');
    }

    public function addVehicleType(Request $request) {
        $vehicle = $request->input('typeVehicle');
        DB::table('type_vehicles')->insert(
                ['type' => $vehicle]
        );
        return back();
    }

    public function getVehicleType() {
        $vehicle_type = DB::table('type_vehicles')->get();
        return view('partner-management-dashboard.vehicle-section', [
            'vehicle_type' => $vehicle_type
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
