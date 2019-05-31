<?php

namespace App\Http\Controllers;
// use Request;
use App\Http\Requests\bookrequest;
use Illuminate\Http\Request;
use App\TypeVehicle;
use App\Vehicle;
use App\Customer;
use App\Bill;
use App\BillDetail;

use DB;

class CustomerController extends Controller
{



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
        $totalPrice = 0;
        foreach($Vehicle as $key =>$vehicle){
        $a = Array(($vehicle->price * $distance));
           $array[$key] = $a;
           $totalPrice = $vehicle->price * $distance;
            
        }
      return  response()->json([
          'Vehicle'=>$Vehicle,
          'distance'=>$distance,
          'price'=>$totalPrice
          ]);
       //return view('User.masterUser.tableFee',compact('Vehicle','distance','Type'));
    }

    public function showDetail($vehicleID,$distance){

        $TypeVehicle = TypeVehicle::select('type_vehicleID','type')->get()->toArray();
        $vehicle = DB::table('Vehicles')
                     ->select('vehicleID', 'brand','partID','description','type_vehicleID','price','image')
                     ->where('vehicleID', $vehicleID)
                     ->get()->toArray();
        $vehicle_img = DB::table('Vehicles')
                     ->select('image')
                     ->where('vehicleID', $vehicleID)
                     ->get()->toArray();
        return view('user.pagesUser.detail', compact('TypeVehicle','vehicle','vehicle_img','distance'));
    }
    public function bookService(Request $req){

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->phone_number = $req->phone;
        $customer->email = "-";
        $customer->address = $req->address;
        $customer->save();
        
        $bill = new Bill;
        $bill->date = $req->Date;
        $bill->status = "unconfimred";
        $bill->note = $req->note;
        $bill->custID = $customer->id;
        $bill->save();
      
        $bill_detail = new BillDetail;
      
        $bill_detail->price = $req->price;
        $bill_detail->quantity = 1;
        $bill_detail->distance = $req->klmet;
        $bill_detail->begin_journey = $req->Starting;
        $bill_detail->end_journey = $req->ending;
        $bill_detail->billID = $bill->id;
        $bill_detail->save();
        
        $TypeVehicle = TypeVehicle::select('type_vehicleID','type')->get()->toArray();
        //return view('user.pagesUser.index', compact('TypeVehicle'));
        return redirect();
    }

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

    

}
