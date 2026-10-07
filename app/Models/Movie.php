<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
    'title',
    'year',
    'genre',
    'director',
    'rating',
    'description',
    'customer_name',
    'rental_date',
    'return_date',
    'rental_status'
];
}

