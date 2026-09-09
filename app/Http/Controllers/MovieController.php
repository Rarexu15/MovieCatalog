<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\TestMovie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function create()
    {
        return view('movies.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1888|max:' . date('Y'),
            'genre' => 'required|string|max:255',
            'director' => 'required|string|max:255',
        ]);

        Movie::create($validated);

        return redirect('/movies');
    }

    public function index()
    {
    $movies = Movie::all();

    return view('movies.index', ['movies' => $movies]);
    }
}

    // public function index()
    // {
    //     $movies = [
    //         [
    //             'id' => 1,
    //             'title' => 'Inception',
    //             'year' => 2010,
    //             'genre' => 'Sci-Fi',
    //             'director' => 'Christopher Nolan'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'The Godfather',
    //             'year' => 1972,
    //             'genre' => 'Crime',
    //             'director' => 'Francis Ford Coppola'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Parasite',
    //             'year' => 2019,
    //             'genre' => 'Thriller',
    //             'director' => 'Bong Joon-ho'
    //         ],
    //     ];

    //     return view('movies.index', ['movies' => $movies]);
    // }

    // public function show($id)
    // {
    //     $movies = [
    //         [
    //             'id' => 1,
    //             'title' => 'Inception',
    //             'year' => 2010,
    //             'genre' => 'Sci-Fi',
    //             'director' => 'Christopher Nolan'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'The Godfather',
    //             'year' => 1972,
    //             'genre' => 'Crime',
    //             'director' => 'Francis Ford Coppola'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Parasite',
    //             'year' => 2019,
    //             'genre' => 'Thriller',
    //             'director' => 'Bong Joon-ho'
    //         ],
    //     ];

    //     foreach ($movies as $movie) {
    //         if ($movie['id'] == $id) {
    //             return view('movies.show', ['movie' => $movie]);
    //         }
    //     }

    //     return 'Movie not found';
    

    // public function test()
    // {
    //     $movies = TestMovie::all();

    //     return $movies;
    // }

    // public function storeTestMovie(Request $request)
    // {
    //     return $request->all();
    // }
