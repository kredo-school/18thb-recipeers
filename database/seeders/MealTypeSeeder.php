<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class MealTypeSeeder extends Seeder
{
    private $meal_type;

    public function __construct(Meal_type $meal_type){
        $this->meal_type = $meal_type;
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        
    }
}
