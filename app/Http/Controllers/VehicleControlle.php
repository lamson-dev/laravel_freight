<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TypeVehicle;
use App\vehicle;
use Auth;
use Input,File;

class VehicleControlle extends Controller
{
    public function index() {
        return view('Vehicle.index-section'); 
    }

    public function getVehicleView() {
        $vehicle_type = DB::table('type_vehicles')->select('type_vehicleID','type')->get();
        $vehicle = DB::table('vehicles')->get();
        return view('Vehicle.vehicle-section',compact('vehicle_type','vehicle'));
    }

    public function getAddVehicle() {

        $vehicle_type = DB::table('type_vehicles')->get();
        $partner = DB::table('partners')->get();
        return view('Vehicle.add_Vehicle', compact('vehicle_type','partner'));

        }

    public function postaddVehicle(Request $request) {
        $name = $request->input('vehicle_brand');
        $file_name = $request->file('fileInput')->getClientOriginalName();
        $des = $request->input('description');
        $type = $request->input('typeVehicle');
        $partner = $request->input('Partner');
        $price = $request->price;
        $image = $file_name;
        $request->file('fileInput')->move('../../public/user_style/images/demo/img/',$file_name);
        DB::table('vehicles')->insert(
        [
        'brand' => $name,
        'partID' => $partner,
        'description' => $des,
        'type_vehicleID' => $type,
        'price' => $price,
        'image' => $image
        ]
        );
        $vehicle_type = DB::table('type_vehicles')->select('type_vehicleID','type')->get();
        $vehicle = DB::table('vehicles')->get();
        return view('Vehicle.vehicle-section',compact('vehicle_type','vehicle'));
        }

        
        public function getUpdate(Request $request,$vehicleID){
            $vehicleTypes = TypeVehicle::all();
            $vehicle = DB::table('vehicles')->where('vehicleID',$vehicleID)->get();//ok
            $partners = DB::table('partners')->get();
            return view('Vehicle.edit_vehicle', compact('vehicleTypes','vehicle','partners'));
        }
            
        public function postUpdate(Request $request,$vehicleID){

            $img_current = '../../public/user_style/images/demo/img/'. $request->input('fileInput');
            $brand = $request->input('vehicle_brand');
            $partID = $request->input('partner');
            $description = $request->input('description');
            $type_vehicleID = $request->input('typeVehicle');
            $price = $request->input('price');

            if(!empty($request->file('fileInput'))){
                $file_name = $request->file('fileInput')->getClientOriginalName();
                $request->file('fileInput')->move('../../public/user_style/images/demo/img/',$file_name);
                
                if(File::exists($img_current))
                {
                    File::delete($img_current);
                }
            }
            DB::table('vehicles')
            ->where('vehicleID', $vehicleID)
            ->update(['brand' => $brand,'partID'=> $partID,
            'description'=> $description ,'type_vehicleID'=> $type_vehicleID,'price'=> $price,'image' => $file_name]);
            return back();
        }


        public function getdelete($id){
            DB::table('vehicles')->where('vehicleID',$id)->delete();
            return back();
        }
}
