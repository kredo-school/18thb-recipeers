<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class CategorySeeder extends Seeder
{
    private $category;

    public function __construct(Category $category){
        $this->category = $category;
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        $category = [
            [
                'name' => '',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ];
        $this->category->insert($category);
    }
}
