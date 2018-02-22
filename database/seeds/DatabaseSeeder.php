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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OrganizationalUnitTableSeeder::class);
        
        $this->call(ResourcesTelephonesTableSeeder::class);
        $this->call(ResourcesComputersTableSeeder::class);
    }
}
