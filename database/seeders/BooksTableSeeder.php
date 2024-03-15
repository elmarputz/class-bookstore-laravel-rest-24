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
        $book = new \App\Models\Book();
        $book->title = "Herr der Ringe";
        $book->subtitle = "Die Rückkehr des Königs";
        $book->isbn = "23234234232423";
        $book->rating = 8;
        $book->description = "Letzter Teil der Trilogie";
        $book->published = new DateTime();
        $book->save();
    }
}
