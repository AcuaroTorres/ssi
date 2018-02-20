<?php

use Illuminate\Database\Seeder;

class ResourcesTelephonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telephone = new App\Resources\Telephone();
        $telephone->number = 572406984;
        $telephone->minsal = 576984;
        $telephone->user_id = 15287582;
        $telephone->save();

        $telephone = new App\Resources\Telephone();
        $telephone->number = 572409501;
        $telephone->minsal = 579501;
        $telephone->save();

        $telephone = new App\Resources\Telephone();
        $telephone->number = 572409502;
        $telephone->minsal = 579502;
        $telephone->save();

        $telephone = new App\Resources\Telephone();
        $telephone->number = 572409503;
        $telephone->minsal = 579503;
        $telephone->save();
    }
}
