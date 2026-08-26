@extends('layouts.app')

@section('content')

    <h1>Movie Catalog</h1>

    @if (count($movies) > 0)
        <ul>
            @foreach ($movies as $movie)
                @include('movies._movie-card')
            @endforeach
        </ul>
    @else
        <p>No movies found.</p>
    @endif

@endsection