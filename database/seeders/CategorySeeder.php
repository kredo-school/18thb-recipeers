<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $category = [
            [
                'name' => 'Appetizer',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Baby Food',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Baked Goods',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'BBQ',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Bento',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Dessert',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Drink',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Fast Food',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Fish & Seafood',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Gluten Free',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'High Protein',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Hot Pot',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Kids Menu',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Low Calorie',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Low Carb',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Noodle',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Salad',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Soup',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Traditional',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Wrap/Taco',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]
        ];
        Category::insert($category);
    }
}
