<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Display a listing of movies
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    // Show the form for creating a new movie
    public function create()
    {
        return view('movies.create');
    }

    // Store a newly created movie in the database
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'title' => 'required|unique:movies|max:255',
            'release_year' => 'nullable|integer|digits:4|min:1000|max:9999', // Updated validation
            'genre' => 'nullable|string|max:100',
            'director' => 'nullable|string|max:100',
            'duration_minutes' => 'nullable|integer',
            'language' => 'nullable|string|max:100',
            'description' => 'nullable|string',
        ]);

        // Create the movie and store it in the database
        Movie::create($request->all());

        // Redirect to the movies index with a success message
        return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
    }

    // Show the form for editing a movie
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    // Update the specified movie in the database
    public function update(Request $request, Movie $movie)
    {
        // Validate the updated data
        $request->validate([
            'title' => 'required|max:255|unique:movies,title,' . $movie->id,
            'release_year' => 'nullable|integer|digits:4|min:1000|max:9999', // Updated validation
            'genre' => 'nullable|string|max:100',
            'director' => 'nullable|string|max:100',
            'duration_minutes' => 'nullable|integer',
            'language' => 'nullable|string|max:100',
            'description' => 'nullable|string',
        ]);

        // Update the movie record in the database
        $movie->update($request->all());

        // Redirect to the movies index with a success message
        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    // Remove the specified movie from the database
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }
}
