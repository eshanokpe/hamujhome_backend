<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'slug', 
        'excerpt', 
        'body', 
        'user_id', 
        'category_id',
        'post_status',
        'post_type',
        'post_image',
        'post_video',  
        'video_url',  // Add this
        'video_thumbnail', // Add this if you want thumbnails
        'meta_title',      // Add this
        'meta_description', // Add this
        'meta_keywords',    // Add this
    ];

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id')->latest();
    }
    public function allComments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
