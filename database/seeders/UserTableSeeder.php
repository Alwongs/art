<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Alexander', 
                'last_name' => 'Pooh', 
                'email' => 'Alwong@ya.ru', 
                'password' => '$2y$10$qj6e60rgqsC0DtGcbKyiK.PnJcREYdEOoKCZmiVGzQd59bvsU.dPa', 
            ],
            [
                'first_name' => 'Ulyana', 
                'last_name' => 'Ermolaeva', 
                'email' => 'Ulyana@ya.ru', 
                'password' => '$2y$10$9tJZVERBNSq6WC7jf79aKu3OBgHrsl7SK2Se3DP4CwA.Ia.mpFLYm', 
            ],
            [
                'first_name' => 'Donald', 
                'last_name' => 'Trump', 
                'email' => 'Trump@ya.ru', 
                'password' => '$2y$10$3yb8bZHIej48NnRYPHQUQOeFvgUCu1TFs73vpMEgpZsenOYqq2e4i', 
            ],
            [
                'first_name' => 'Vinnie', 
                'last_name' => 'Pooh', 
                'email' => 'Vinnie@ya.ru', 
                'password' => '$2y$10$kY.DCyrhYKm5OEIVlNXLKeJH.gpjZY6yeDXJJAGfdfkb7VfWnSvkK', 
            ],
        ]);
    }
 
}
