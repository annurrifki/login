<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(PeopleSeeder::class);
        // $this->call(BlogSeeder::class);
        $this->call(UserSeeder::class);
    }
}
