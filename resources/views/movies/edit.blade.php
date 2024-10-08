<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Edit Movie</h1>
    </header>
    <div class="container">
        <form action="{{ route('movies.update', $movie) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ $movie->title }}" required>
            <label for="release_year">Release Year:</label>
            <input type="text" name="release_year" value="{{ $movie->release_year }}">
            <label for="genre">Genre:</label>
            <input type="text" name="genre" value="{{ $movie->genre }}">
            <label for="director">Director:</label>
            <input type="text" name="director" value="{{ $movie->director }}">
            <label for="duration_minutes">Duration (minutes):</label>
            <input type="number" name="duration_minutes" value="{{ $movie->duration_minutes }}">
            <label for="language">Language:</label>
            <input type="text" name="language" value="{{ $movie->language }}">
            <label for="description">Description:</label>
            <textarea name="description">{{ $movie->description }}</textarea>
            <button type="submit">Update Movie</button>
        </form>
        <a href="{{ route('movies.index') }}">Back to Movies</a>
    </div>
</body>
</html>
