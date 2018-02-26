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
        $telephone = App\Resources\Telephone::Create(['number'=>572406984, 'minsal'=>576984, 'user_id'=>15287582]);
        $telephone = App\Resources\Telephone::Create(['number'=>572409501, 'minsal'=>579501]);
        
        $telephone = App\Resources\Telephone::Create(['number'=>572539004, 'minsal'=>579004, 'user_id'=>10278387]);
        $telephone = App\Resources\Telephone::Create(['number'=>572539008, 'minsal'=>579008, 'user_id'=>14107361]);
        $telephone = App\Resources\Telephone::Create(['number'=>572539009, 'minsal'=>579009, 'user_id'=>15924400]);
        $telephone = App\Resources\Telephone::Create(['number'=>572539518, 'minsal'=>579518, 'user_id'=>16966444]);
    }
}
