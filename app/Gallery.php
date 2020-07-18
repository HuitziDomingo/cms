<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $nullable = [
        'user_id',
        'imgage_url',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
