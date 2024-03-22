<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a1 = new Author();
        $a1->firstName = "Max";
        $a1->lastName = "Muster";
        $a1->save();

        $a2 = new Author();
        $a2->firstName = "Susanne";
        $a2->lastName = "Testmayer";
        $a2->save();

        $a3 = new Author();
        $a3->firstName = "Fritz";
        $a3->lastName = "Berger";
        $a3->save();
    }
}
