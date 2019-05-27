<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
        [
            'brand' => "TOYOTA",
             'partID'=> 1,
             'description' =>"Xe màu xanh, biển số 43789",
             'type_vehicleID'=>1,
             'price'=>15000,
             'image'=>"1.jpg",
        ],
        [
            'brand' => "TOYOTA",
             'partID'=> 1,
             'description' =>"Xe màu xanh, biển số 74546",
             'type_vehicleID'=>2,
             'price'=>30000,
             'image'=>"2.jpg",
        ],
        [
            'brand' => "TOYOTA",
             'partID'=> 1,
             'description' =>"Xe màu xanh, biển số 75231",
             'type_vehicleID'=>3,
             'price'=>45000,
             'image'=>"3.jpg",
        ],[
            'brand' => "TOYOTA",
             'partID'=> 1,
             'description' =>"Xe màu xanh, biển số 92756",
             'type_vehicleID'=>4,
             'price'=>60000,
             'image'=>"4.jpg",
        ],[
            'brand' => "TOYOTA",
             'partID'=> 1,
             'description' =>"Xe màu xanh, biển số 43789",
             'type_vehicleID'=>5,
             'price'=>75000,
             'image'=>"5.jpg",
        ],[
            'brand' => "TOYOTA",
             'partID'=> 1,
             'description' =>"Xe màu xanh, biển số 75145",
             'type_vehicleID'=>6,
             'price'=>90000,
             'image'=>"6.jpg",
        ]]);
    }
}
