<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::insert([
        		'name' => 'Admin',
        		'username' => 'Admin',
        		'email' => 'admin',
        		'password' => bcrypt('admin'),
        		'jabatan' => 'ADMIN',
        		'remember_token' => str_random(60),
        		'created_at' => Carbon\Carbon::now('Asia/Jakarta'),
        	]);
    }
}

