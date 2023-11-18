<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                "name" => "Not Available",
                "description" => "Buku tidak tersedia"
            ],
            [
                "name" => "Available",
                "description" => "Buku tersedia"
            ],
            [
                "name" => "Lent",
                "description" => "Buku sedang dipinjam"
            ],
        ];

        Status::insert($statuses);
    }
}
