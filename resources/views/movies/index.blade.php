@extends('layouts.app')
@section('title', 'Movie Catalog')
@section('content')
<h1>Movie Catalog</h1>
@foreach ($movies as $movie)
<h2>{{ $movie->title }}</h2>
<p>Year: {{ $movie->year }}</p>
<p>Genre: {{ $movie->genre }}</p>
<p>Director: {{ $movie->director }}</p>
<p>Rating: {{ $movie->rating }}</p>
<p>Description: {{ $movie->description }}</p>
<p>Rental Status: {{ $movie->rental_status }}</p>
<hr>
@endforeach
@endsection
