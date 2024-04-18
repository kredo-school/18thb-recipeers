<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $meal_type = [
            [
                'name' => 'Breakfast',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Brunch',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Lunch',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Dinner',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Snack',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ];
        DB::table('meal_types')->insert($meal_type);
    }
}
