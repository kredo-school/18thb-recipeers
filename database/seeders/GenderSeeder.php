<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class GenderSeeder extends Seeder
{
    private $gender;

    public function __construct(Gender $gender){
        $this->gender = $gender;
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        
    }
}
