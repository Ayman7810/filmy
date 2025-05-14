<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
       return $this->middleware('auth')->only('create' , 'store' , 'edit' , 'index', 'edit', 'update', 'destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->status === '1'){
            $blogs = Blog::paginate(10);
        }else {
            
            $blogs = Blog::where('user_id' ,Auth::user()->id)->paginate(10);
        }
        return view('theme.blogs.desplay-blogs' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('theme.blogs.create-blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        
        $data = $request->validated();
        $image = $request->image;

        $newImageName = time() . '-' . $image->getClientOriginalName(); 

        $image->storeAs('blogs' , $newImageName , 'public');
        
        $data['image'] = $newImageName;

        $data['user_id'] = Auth::user()->id;

        Blog::create($data);

        return back()->with('statusCreateBlog' , 'Create blog successfly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('theme.pages.blog-info' ,compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        if(Auth::user()->id === $blog->user_id || Auth::user()->status === '1'){
            return view('theme.blogs.edit-blog', compact('blog'));
        }
        return view('theme.pages.404');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        // dd('dfdf');
        $data = $request->validated();
        if($request->hasFile('image')){
            Storage::delete("public/blogs/$blog->image");
            
            $image = $request->image;

            $newImageName = time() . '-' .$image->getClientOriginalName();
            
            $image->storeAs('blogs' , $newImageName , 'public');

            $data['image'] = $newImageName ; 

        }
        $blog->update($data);
        $slug = Str::slug($blog->title);
        return to_route('blog.edit',['blog'=> $slug])->with('statusUpdateBlog' , 'Update blog successfly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        // dd('addad');
        Storage::delete("public/blogs/$blog->image");
        $blog->delete();
        return back()->with('statusDeleteBlog' , 'Delete blog successfly');
    }
}