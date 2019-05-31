<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'partID'=>1,
        	'email' => 'thiethuynh.dev@gmail.com',
        	'password' =>Hash::make('password'),
        	'remember_token' =>str_random(10),
        ],
        [
          'partID'=>2,
          'email' => 'thiethuynh.dev1@gmail.com',
          'password' =>Hash::make('password'),
          'remember_token' =>str_random(10),
        ],
        [
          'partID'=>3,
          'email' => 'thiethuynh.dev2@gmail.com',
          'password' =>Hash::make('password1'),
          'remember_token' =>str_random(10),
        ]);
    }
}
