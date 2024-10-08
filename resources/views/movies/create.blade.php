<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo-area">
            <h1>Add Movie</h1>
        </div>
    </header>

    <div class="main-container">
        <div class="content">
            <div class="form-area">
                <form action="{{ route('movies.store') }}" method="POST">
                    @csrf
                    <label for="title">Title:</label>
                    <input type="text" name="title" required>

                    <label for="release_year">Release Year:</label>
                    <input type="text" name="release_year">

                    <label for="genre">Genre:</label>
                    <input type="text" name="genre">

                    <label for="director">Director:</label>
                    <input type="text" name="director">

                    <label for="duration_minutes">Duration (minutes):</label>
                    <input type="number" name="duration_minutes">

                    <label for="language">Language:</label>
                    <input type="text" name="language">

                    <label for="description">Description:</label>
                    <textarea name="description"></textarea>

                    <button type="submit" class="submit-btn">Create Movie</button>
                </form>
                <a href="{{ route('movies.index') }}" class="back-link">Back to Movies</a>
            </div>
            <div class="visual-area">
                <img src="{{ asset('images/bumblebee.jpeg') }}" alt="Movie Image">
                <img src="{{ asset('images/tahong.jpeg') }}" alt="Movie Image">
                <img src="{{ asset('images/niko.jpg') }}" alt="Movie Image">
                <img src="{{ asset('images/wifelike.jpeg') }}" alt="Movie Image">
                <img src="{{ asset('images/rambo.jpg') }}" alt="Movie Image">
                <img src="{{ asset('images/c.jpeg') }}" alt="Movie Image">
                <img src="{{ asset('images/b.jpeg') }}" alt="Movie Image">
                <img src="{{ asset('images/a.jpeg') }}" alt="Movie Image">
                <img src="{{ asset('images/d.jpg') }}" alt="Movie Image">
                <img src="{{ asset('images/naygamay.jpeg') }}" alt="Movie Image">






            </div>
        </div>
    </div>
</body>
</html>
