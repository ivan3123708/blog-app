<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * One-to-many relationship with User
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * One-to-many relationship with Comment
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
