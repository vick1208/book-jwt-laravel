<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                "title" => "PHP dasar",
                "release_date" => "2018-09-11",
                "status_id" => 2,
                "user_id" => 1
            ],
            [
                "title" => "Ruby dasar",
                "release_date" => "2018-09-11",
                "status_id" => 2,
                "user_id" => 1
            ],
            [
                "title" => "Java dasar",
                "release_date" => "2018-09-11",
                "status_id" => 2,
                "user_id" => 1
            ],
        ];
        Book::insert($books);
    }
}
