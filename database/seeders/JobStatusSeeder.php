<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class JobStatusSeeder extends Seeder
{
    private $job_status;

    public function __construct(Job_status $job_status){
        $this->job_status = $job_status;
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        
    }
}
