<?php

use Illuminate\Database\Seeder;

class ResourcesComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $computer = new App\Resources\Computer();
        $computer->brand = 'LENOVO';
        $computer->model = 'v510z';
        $computer->serial = 'MP1A0M53';
        $computer->ip = '10.8.226.29';
        $computer->user_id = 15287582;
        $computer->save();

        $computer = new App\Resources\Computer();
        $computer->brand = 'OLIDATA';
        $computer->model = 'v510z';
        $computer->serial = 'XXXXX';
        $computer->ip = '10.8.226.124';
        $computer->save();

        $computer = new App\Resources\Computer();
        $computer->brand = 'LENOVO';
        $computer->model = 'v510z';
        $computer->serial = 'XXXXX';
        $computer->ip = '10.8.226.99';
        $computer->save();
    }
}
