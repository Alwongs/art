<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Моя кошка', 
                'image' => 'picture-1.jpg', 
                'description' => 'Это на самом деле не моя кошка. Просто добавил для теста на этом сайте. Вот так.', 
                'likes' => 2,
                'user_id' => 1
            ],
            [
                'title' => 'Моя машинка', 
                'image' => 'picture-2.jpg', 
                'description' => 'Это на самом деле просто рисунок скачанный с интернета для теста  на этом сайте', 
                'likes' => 1,
                'user_id' => 1
            ],
            [
                'title' => 'Chester', 
                'image' => 'picture-3.jpg', 
                'description' => 'Это сабака с интернета для теста сайта', 
                'likes' => 4,
                'user_id' => 2
            ],
        ]);
    }
 
}
