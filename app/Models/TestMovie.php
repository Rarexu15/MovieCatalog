<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestMovie extends Model
{
    protected $table = 'test_movies';

    protected $fillable = [
        'title',
        'year',
        'genre',
        'director'
    ];
}