<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $gender = [
            [
                'gender' => 'Female',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'gender' => 'Male',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'gender' => 'Prefer not to say',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ];
        DB::table('genders')->insert($gender);
    }
}
