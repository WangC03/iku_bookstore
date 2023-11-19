<?php

namespace App\Models;

use App\Casts\FormatImageGet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books'; // 'books' is the name of the table in the database
    protected $fillable = [
        'isbn',
        'title',
        'slug',
        'description',
        'status',
        'number_of_pages',
        'publication_date',
        'regular_price',
        'sale_price',
        'quantity',
        'language_id',
        'publisher_id',
    ];

    protected $casts = [
        'external_url' => FormatImageGet::class,
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'authors_books', 'book_id', 'author_id');
    }


    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genres_books', 'book_id', 'genre_id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}
