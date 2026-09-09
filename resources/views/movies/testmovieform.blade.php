<!DOCTYPE html>
<html>
<head>
    <title>Add Test Movie</title>
</head>
<body>

    <h1>Add a Test Movie</h1>

    <form action="/test-movies" method="POST">

        @csrf

        <label>Movie Title:</label>
        <input type="text" name="title">
        <br><br>

        <label>Year:</label>
        <input type="number" name="year">
        <br><br>

        <label>Genre:</label>
        <input type="text" name="genre">
        <br><br>

        <label>Director:</label>
        <input type="text" name="director">
        <br><br>

        <button type="submit">Add Movie</button>

    </form>

</body>
</html>