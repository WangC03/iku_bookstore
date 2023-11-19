<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Genre::insert([
            [
                'name' => 'Văn học',
                'slug' => 'van-hoc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tiểu thuyết',
                'slug' => 'tieu-thuyet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anime',
                'slug' => 'anime',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Light Novel',
                'slug' => 'light-novel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
