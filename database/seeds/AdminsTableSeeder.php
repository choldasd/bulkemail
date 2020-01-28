<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('admins')->insert([
		   'name' => 'Super Admin',
		   'email' => 'super@admin.com',
		   'password' =>Hash::make('Super@123'),
		   'created_at' =>Date("Y-m-d H:i:s"),
		   'updated_at' =>Date("Y-m-d H:i:s")
	   ]);
    }
}
