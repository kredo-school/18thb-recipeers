<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\User;

class EatingPrefSeeder extends Seeder
{
    private $eating_pref;

    public function __construct(Eating_pref $eating_pref){
        $this->eating_pref = $eating_pref;
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        
    }
}
