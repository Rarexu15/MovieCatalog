@extends('layouts.app')

@section('content')

    <h1>{{ $movie['title'] }}</h1>

    <ul>
        <li>Year: {{ $movie['year'] }}</li>
        <li>Genre: {{ $movie['genre'] }}</li>
        <li>Director: {{ $movie['director'] }}</li>
    </ul>

    <a href="{{ route('movies.index') }}">← Back to Movie List</a>

@endsection