<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'image' , 'description' , 'user_id'];
    
    // public function getRouteKeyName()
    // {
    //  return 'slug';   
    // }
    
    public function  user() {
        return $this->belongsTo(User::class);
    }
    public function comments()  {
        return $this->hasMany(Comment::class);
    }
}