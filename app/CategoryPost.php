<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $nullable = [
        'category_id',
        'post_id',
    ];
}
