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
<label>Customer Name:</label>
<input type="text" name="customer_name" value="{{ old('customer_name') }}">

<label>Rental Date:</label>
<input type="date" name="rental_date" value="{{ old('rental_date') }}">

<label>Return Date:</label>
<input type="date" name="return_date" value="{{ old('return_date') }}">

<label>Rental Status:</label>
<select name="rental_status">
    <option value="Available">Available</option>
    <option value="Rented">Rented</option>
</select>

<br><br>
    <label>Rating:</label>
    <input type="number" step="0.1" name="rating" value="{{ old('rating') }}">
    @error('rating')
        <div>{{ $message }}</div>
    @enderror
<br>
<br>

    <label>Description:</label>
    <textarea name="description">{{ old('description') }}</textarea>
    @error('description')
        <div>{{ $message }}</div>
    @enderror


<br>
<br>

<button type="submit">Add Movie</button>
</form>
@endsection
