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
                'name' => 'Alexander', 
                'email' => 'Alwong@ya.ru', 
                'password' => '$2y$10$qj6e60rgqsC0DtGcbKyiK.PnJcREYdEOoKCZmiVGzQd59bvsU.dPa', 
            ],
            [
                'name' => 'Ulyana', 
                'email' => 'Ulyana@ya.ru', 
                'password' => '$2y$10$9tJZVERBNSq6WC7jf79aKu3OBgHrsl7SK2Se3DP4CwA.Ia.mpFLYm', 
            ],
            [
                'name' => 'Trump', 
                'email' => 'Trump@ya.ru', 
                'password' => '$2y$10$3yb8bZHIej48NnRYPHQUQOeFvgUCu1TFs73vpMEgpZsenOYqq2e4i', 
            ],
            [
                'name' => 'Vinnie', 
                'email' => 'Vinnie@ya.ru', 
                'password' => '$2y$10$kY.DCyrhYKm5OEIVlNXLKeJH.gpjZY6yeDXJJAGfdfkb7VfWnSvkK', 
            ],
        ]);
    }
 
}
