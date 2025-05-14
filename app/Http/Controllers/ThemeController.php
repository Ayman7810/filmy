<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Movie;

class ThemeController extends Controller
{
    public function index()
    {

        $movies = Movie::latest()->take(3)->get();
        $moviesSlider = Movie::latest()->get();

        $blogs = Blog::latest()->take(4)->get();

        $moviesCommingSoon = Movie::where('status', 'Comming soon')->get();

        return view('theme.pages.home', compact('movies', 'moviesCommingSoon', 'moviesSlider', 'blogs'));
    }

    public function blogInfo()
    {
        return view('theme.pages.blog-info');
    }
    public function movieInfo()
    {
        return view('theme.pages.movie-info');
    }

    public function moviesID($id)
    {
        $movies = Movie::where('category_id', $id)->latest()->paginate(4);

        $categories = Category::all();
        return view('theme.pages.movies', compact('movies', 'categories'));
    }
    public function movies()
    {

        $movies = Movie::latest()->paginate(4);
        $categories = Category::all();
        return view('theme.pages.movies', compact('movies', 'categories'));
    }
    public function blogs()
    {
        $blogs = Blog::latest()->paginate(2);

        return view('theme.pages.blogs', compact('blogs'));
    }
    public function contact()
    {
        return view('theme.pages.contact');
    }

    public function notFound()
    {
        return view('theme.pages.404');
    }
}