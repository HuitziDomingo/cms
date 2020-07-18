<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $nullable = [
        'user_id',
        'thumbnail',
        'title',
        'sub_title',
        'slug',
        'details',
        'post_type',
        'is_published',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'category_posts');
    }
}
