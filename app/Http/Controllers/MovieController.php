<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MovieController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->only('create', 'store', 'index', 'edit', 'update', 'destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->status === '1') {
            $movies = Movie::paginate(10);
            return view('theme.movie.desplay-movies', compact('movies'));
        }
        return view('theme.pages.404');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('dfdf');
        if (Auth::check() && Auth::user()->status === '1') {
            $categories = Category::all();
            return view('theme.movie.create-movie', compact('categories'));
        }
        return view('theme.pages.404');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {

        $data = $request->validated();

        $image = $request->image;

        $newImageName = time() . '-' . $image->getClientOriginalName();

        $image->storeAs('movies', $newImageName, 'public');
        $data['image'] = $newImageName;
        $data['time'] = $request->time . ' min';
        $data['user_id'] = Auth::user()->id;


        Movie::create($data);

        return back()->with('statusCreateMovie', 'Create movie successfly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $movies = Movie::where('category_id', $movie->category_id)->get();
        return view('theme.pages.movie-info', compact('movie', 'movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        
        $categories = Category::all();
        return view('theme.movie.edit-movie', compact('categories', 'movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            Storage::delete("public/movies/$movie->image");
            $image = $request->image;

            $newImageName = time() . '-' . $image->getClientOriginalName();

            $image->storeAs('movies', $newImageName, 'public');
            $data['image'] = $newImageName;
        }



        $movie->update($data);
        
        $slug = Str::slug($movie->name);
        return to_route('movie.edit' ,['movie'=>$slug])->with('status-edit-movie', 'edit movie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {

        Storage::delete("public/movies/$movie->image");
        $movie->delete();
        return back()->with('status-delete-movie', 'delete movie');
    }
}