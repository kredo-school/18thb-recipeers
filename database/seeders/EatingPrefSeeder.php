<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EatingPrefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $eating_pref = [
            [
                'name' => 'Vegan',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Vegetarian',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Halal',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Hindi Diet',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ];
        DB::table('eating_preferences')->insert($eating_pref);
    }
}
