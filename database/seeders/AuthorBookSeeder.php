<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $books = Book::all();
        $authors = Author::all();
        foreach ($books as $book) {
            $authorIds = $authors->random(rand(1, 3))->pluck('id')->toArray();
            $book->authors()->attach($authorIds);
        }
    }
}
