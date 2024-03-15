<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new \App\Models\User;
        $user->name = 'testuser';
        $user->email = 'test@test.at';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
