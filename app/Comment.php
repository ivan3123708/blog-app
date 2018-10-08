<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'post_id', 'content'
    ];

    /**
     * One-to-many relationship with Post
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    /**
     * One-to-many relationship with User
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
