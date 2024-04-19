<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccasionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run()
    {
        $occasion = [
            [
                'name' => 'Party',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Celebration',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'New Year',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Chinese New Year',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => "Valentine's Day",
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Hinamatsuri',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Easter',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Halloween',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Thanksgiving',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Christmas',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],

        ];
        DB::table('pref_occasions')->insert($occasion);
    }
}
