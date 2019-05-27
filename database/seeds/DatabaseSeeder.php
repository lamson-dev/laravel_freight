<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PartnerTableSeeder::class);
         $this->call(TypeVehicleTableSeeder::class);
         $this->call(VehicleTableSeeder::class);
    }
    
}
