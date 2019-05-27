<?php

use Illuminate\Database\Seeder;

class TypeVehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_vehicles')->insert([
        [
            'type' => "Truck 500 kg"
        ],[
            'type' => "Truck 750 kg"
        ], [
            'type' => "Truck 1 Ton"
        ],[
            'type' => "Truck 1.5 Ton"
        ],[
            'type' => "Truck 1.9 Ton"
        ],[
            'type' => "Truck 2 Tons (Container 6m)"
        ]
        ]);
    }
}
