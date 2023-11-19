<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table = 'languages'; // 'languages' is the name of the table in the database
    protected $fillable = ['code', 'name']; // 'code' and 'name' are the columns in the table
}
