<?php

namespace Database\Seeders;

use App\Models\Author;
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

        // get first user
        $user = \App\Models\User::all()->first();
        $book->user()->associate($user);

        $book->save();

        $image1 = new \App\Models\Image;
        $image1->title = "img 01";
        $image1->url = 'https://picsum.photos/400/400';

        $image2 = new \App\Models\Image;
        $image2->title = "img 02";
        $image2->url = 'https://picsum.photos/400/400';

        $book->images()->saveMany([$image1,$image2]);

        // test authors
        $authors = Author::all()->pluck("id");
        $book->authors()->sync($authors);

        $book->save();



    }
}
