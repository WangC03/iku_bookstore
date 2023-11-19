<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'publishers'; // 'publishers' is the name of the table in the database
    protected $fillable = ['name']; // 'name' is the column in the table

}
