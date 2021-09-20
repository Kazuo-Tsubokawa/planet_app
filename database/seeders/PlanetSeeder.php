<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'name' => '水星',
                'name_english' => 'MERCURY',
                'radius' => 2439,
                'weight' => 3310,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '金星',
                'name_english' => 'VENUS',
                'radius' => 6052,
                'weight' => 48700,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '地球',
                'name_english' => 'EARTH',
                'radius' => 6378,
                'weight' => 59760,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '火星',
                'name_english' => 'MARS',
                'radius' => 3397,
                'weight' => 6420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('planets')->insert($param);
    }
}
