<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                "id" => 1,
                "name" => "Pending"
            ],
            [
                "id" => 2,
                "name" => "Ready for dispatch"
            ],
            [
                "id" => 3,
                "name" => "Delivered"
            ],
            [
                "id" => 4,
                "name" => "Rejected"
            ],
            [
                "id" => 5,
                "name" => "Archived"
            ]
        ];
    
        foreach ($statuses as $status) {
            Status::create($status);
        }
}
}