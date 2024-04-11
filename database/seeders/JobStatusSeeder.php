<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $job_status = [
            [
                'name' => 'Full-time',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Part-time',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Business Owner',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Self-employed',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Internship',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Student',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Other',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ];
        DB::table('job_statuses')->insert($job_status);
    }
}
