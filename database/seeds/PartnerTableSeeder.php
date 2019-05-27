<?php

use Illuminate\Database\Seeder;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('partners')->insert([
           'name' => Str::random(10),
            'phone_number'=> Str::random(10),
            'address' =>Str::random(10),
            'email'=>Str::random(10),
            'logoImage'=>Str::random(10),
            'website'=>Str::random(10),
        ]);
    }
}
