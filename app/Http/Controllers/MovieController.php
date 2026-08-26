<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = [
            ['id' => 1, 'title' => 'Inception', 'year' => 2010, 'genre' => 'Sci-Fi', 'director' => 'Christopher Nolan'],
            ['id' => 2, 'title' => 'The Godfather', 'year' => 1972, 'genre' => 'Crime', 'director' => 'Francis Ford Coppola'],
            ['id' => 3, 'title' => 'Parasite', 'year' => 2019, 'genre' => 'Thriller', 'director' => 'Bong Joon-ho'],
        ];

        return view('movies.index', ['movies' => $movies]);
    }

    public function show($id)
    {
        $movies = [
            ['id' => 1, 'title' => 'Inception', 'year' => 2010, 'genre' => 'Sci-Fi', 'director' => 'Christopher Nolan'],
            ['id' => 2, 'title' => 'The Godfather', 'year' => 1972, 'genre' => 'Crime', 'director' => 'Francis Ford Coppola'],
            ['id' => 3, 'title' => 'Parasite', 'year' => 2019, 'genre' => 'Thriller', 'director' => 'Bong Joon-ho'],
        ];

        foreach ($movies as $movie) {
            if ($movie['id'] == $id) {
                return view('movies.show', ['movie' => $movie]);
            }
        }

        return 'Movie not found';
    }
}