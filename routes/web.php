<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// Redirect the root URL to the movies index page
Route::get('/', function () {
    return redirect()->route('movies.index');
});

// Resource route for the movies controller, handling CRUD actions
Route::resource('movies', MovieController::class);
