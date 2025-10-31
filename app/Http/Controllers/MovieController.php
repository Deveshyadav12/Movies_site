<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Show all movies (admin dashboard)
    public function index()
    {
        $movies = Movie::latest()->paginate(10); // paginate 10 per page
        return view('admin.movies', compact('movies'));
    }

    // Show create movie form
    public function create()
    {
        return view('admin.movies_create');
    }

    // Store a new movie
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:100',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'download_url' => 'nullable|url|max:500',
        ]);

        $data = $request->all();

        if ($request->hasFile('poster')) {
            $data['poster'] = $request->file('poster')->store('posters', 'public');
        }

        Movie::create($data);

        return redirect()->route('admin.movies')->with('success', 'Movie added successfully!');
    }

    // Show edit movie form
    public function edit(Movie $movie)
    {
        return view('Admin.movie_edit', compact('movie'));
    }

    // Update a movie
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:100',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'download_url' => 'required|url|max:500',
            'Description' => 'nullable|string|max:1000',
        ]);

        $data = $request->all();

        if ($request->hasFile('poster')) {
            $data['poster'] = $request->file('poster')->store('posters', 'public');
        }

        $movie->update($data);

        return redirect()->route('admin.movies')->with('success', 'Movie updated successfully!');
    }

    // Delete a movie
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.movies')->with('success', 'Movie deleted successfully!');
    }

    // Public view: show all movies
    public function publicIndex()
    {
        $movies = Movie::latest()->paginate(12);
        return view('public.home', compact('movies'));
    }

    // Public view: show single movie details
    public function show(Movie $movie)
    {
        return view('public.movie_details', compact('movie'));
    }
}
