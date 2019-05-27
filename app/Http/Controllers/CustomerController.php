<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeVehicle;
use App\Vehicle;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function selectType(){
        $TypeVehicle = TypeVehicle::select('type_vehicleID','type')->get()->toArray();
        return view('user.pagesUser.index', compact('TypeVehicle'));
    } 
    public function selectTypeintoHeader(){
        $TypeVehicle = TypeVehicle::select('type_vehicleID','type')->get()->toArray();
        return view('user.masterUser.header', compact('TypeVehicle'));
    }
    public function selectTypeintoleft(){
        $TypeVehicle = TypeVehicle::select('type_vehicleID','type')->get()->toArray();
        return view('user.masterUser.menu-left', compact('TypeVehicle'));
    }

    public function calculateFee(Request $request){
        $Type = $request->Type;
        $distance = $request->distance;
        $Vehicle = DB::table('Vehicles')
                     ->select('vehicleID', 'brand','partID','description','type_vehicleID','price','image')
                     ->where('type_vehicleID', $Type)
                     ->get()->toArray();
        $array = Array();
        foreach($Vehicle as $key =>$vehicle){
        $a = Array(($vehicle->price * $distance));
           $array[$key] = $a;
            
        }
        
       
       return view('User.masterUser.tableFee',compact('Vehicle','distance'));
    }

}
