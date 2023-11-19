<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors'; // 'authors' is the name of the table in the database
    protected $fillable = ['name']; // 'name' is the column in the table
}
