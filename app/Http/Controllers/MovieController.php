<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function showAllMovie()
    {
        $movies = Movie::with('genre')->paginate(4);
        // dd($movies);
        return view('pages.home', compact('movies'));
    }

    public function insertMovie()
    {
        $genres = Genre::all();
        return view('pages.insertMovie', compact('genres'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:movies|max:30',
            'photo' => 'required|image|max:5000',
            'publish_date' => 'required|date|before_or_equal:today',
            'description' => 'required|max:50',
            'genre' => 'required'
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->photo = $request->photo->store('movie', 'public');
        $movie->publish_date = $request->publish_date;
        $movie->description = $request->description;
        $movie->genre_id = $request->genre;
        $movie->save();

        return back()->with('success', true);
    }

    public function deleteMovie($id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            if ($movie->photo && Storage::exists('public/' .$movie->photo)) {
                Storage::delete('public/' .$movie->photo);
            }
            $movie->delete();
            return back()->with('success', "Movie deleted successfully!");
        }

        return back()->with('error', "Movie not found!");
    }
}
