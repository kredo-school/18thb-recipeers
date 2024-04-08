<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class OccasionSeeder extends Seeder
{
    private $occasion;

    public function __construct(Occasion $occasion){
        $this->occasion = $occasion;
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        
    }
}
