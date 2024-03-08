<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => Str::random(50),
            'isbn' => "123456789",
            'subtitle' => Str::random(50),
            'rating' => 10,
            'description' => Str::random(1000),
            'published' => new DateTime(),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s")
        ]);

        DB::table('books')->insert([
            'title' => Str::random(50),
            'isbn' => "1234567891",
            'subtitle' => Str::random(50),
            'rating' => 10,
            'description' => Str::random(1000),
            'published' => new DateTime(),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s")
        ]);

        DB::table('books')->insert([
            'title' => Str::random(50),
            'isbn' => "1234567890",
            'subtitle' => Str::random(50),
            'rating' => 10,
            'description' => Str::random(1000),
            'published' => new DateTime(),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s")
        ]);
    }
}
