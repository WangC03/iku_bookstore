<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres'; // 'genres' is the name of the table in the database
    protected $fillable = ['name', 'slug', 'parent_id']; // 'name', 'slug' and 'parent_id' are the columns in the table

    public function genre()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function genres()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
