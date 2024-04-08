<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inquiry;

class InquirySeeder extends Seeder
{
    private $inquiry;

    public function __construct(Inquiry $inquiry){
        $this->inquiry = $inquiry;
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        $inquiry = [
                        [
                            'inquirer_name' => 'inquirer 1',
                            'email' => 'email 1',
                            'title' => 'inquiry 1',
                            'body' => 'inquiry body 1',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 2',
                            'email' => 'email 2',
                            'title' => 'inquiry 2',
                            'body' => 'inquiry body 2',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 3',
                            'email' => 'email 3',
                            'title' => 'inquiry 3',
                            'body' => 'inquiry body 3',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 4',
                            'email' => 'email 4',
                            'title' => 'inquiry 4',
                            'body' => 'inquiry body 4',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 5',
                            'email' => 'email 5',
                            'title' => 'inquiry 5',
                            'body' => 'inquiry body 5',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 6',
                            'email' => 'email 6',
                            'title' => 'inquiry 6',
                            'body' => 'inquiry body 6',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 7',
                            'email' => 'email 7',
                            'title' => 'inquiry 7',
                            'body' => 'inquiry body 7',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 8',
                            'email' => 'email 8',
                            'title' => 'inquiry 8',
                            'body' => 'inquiry body 8',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 9',
                            'email' => 'email 9',
                            'title' => 'inquiry 9',
                            'body' => 'inquiry body 9',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 10',
                            'email' => 'email 10',
                            'title' => 'inquiry 10',
                            'body' => 'inquiry body 10',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 11',
                            'email' => 'email 11',
                            'title' => 'inquiry 11',
                            'body' => 'inquiry body 11',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ],
                        [
                            'inquirer_name' => 'inquirer 12',
                            'email' => 'email 12',
                            'title' => 'inquiry 12',
                            'body' => 'inquiry body 12',
                            'created_at' => NOW(),
                            'updated_at' => NOW(),
                        ]
                    ];
        $this->inquiry->insert($inquiry);
    }
}
