<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $books = Book::all();
        $genres = Genre::all();
        foreach ($books as $book) {
            $genreIds = $genres->random(rand(2, 4))->pluck('id')->toArray();
            $book->genres()->attach($genreIds);
        }
    }
}
