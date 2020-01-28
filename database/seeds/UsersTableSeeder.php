<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('users')->insert([
		   'name' => 'Choldas Dhande',
		   'email' => 'choldasd@gmail.com',
		   'website' => 'https://abc.com',
		   'password' =>Hash::make('Choldas@123'),
		   'created_at' =>Date("Y-m-d H:i:s"),
		   'updated_at' =>Date("Y-m-d H:i:s")
	   ]);
    }
}
