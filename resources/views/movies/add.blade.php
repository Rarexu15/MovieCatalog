@extends('layouts.app')
@section('title', 'Add Movie')
@section('content')
<h1>Add Movie</h1>
@if ($errors->any())
<div style="color: red;">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="/movies" method="POST">
@csrf
<label>Title:</label>
<input type="text" name="title" value="{{ old('title') }}">
<br><br>
<label>Year:</label>
<input type="number" name="year" value="{{ old('year') }}">
<br><br>
<label>Genre:</label>
<input type="text" name="genre" value="{{ old('genre') }}">
<br><br>
<label>Director:</label>
<input type="text" name="director" value="{{ old('director') }}">
<br><br>
<button type="submit">Add Movie</button>
</form>
@endsection
