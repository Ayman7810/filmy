<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'description' , 'image' ,'status' , 'rating' , 'time' , 'user_id', 'category_id' ]; 

    

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function comments()  {
        return $this->hasMany(Comment::class);
    }
}