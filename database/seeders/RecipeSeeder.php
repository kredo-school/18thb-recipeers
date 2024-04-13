<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;
use Faker\Factory as Faker;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 24) as $index) {
            Recipe::create([
                'title' => $faker->sentence(1),
                'user_id' => $faker->numberBetween(10, 25),
                'summary' => $faker->sentence(3),
                'thumbnail' => $faker->imageUrl(),
                'category_id' => $faker->numberBetween(1, 20),
                'country_id' => $faker->numberBetween(1, 249),
                'eating_pref_id' => $faker->numberBetween(1, 4),
                'occasion_id' => $faker->numberBetween(1, 10),
                'meal_type_id' => $faker->numberBetween(1, 5),
                'prep_time' => $faker->numberBetween(10, 120),
                'status' => $faker->randomElement(['visible', 'hidden']),
            ]);
        };
    }
}