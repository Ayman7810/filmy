<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'review' , 'rating' , 'blog_id' , 'movie_id'];

    public function movie()  {
        return $this->belongsTo(Movie::class);
    }
    public function blog()  {
        return $this->belongsTo(Blog::class);
    }
}