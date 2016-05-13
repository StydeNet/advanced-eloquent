<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
    	return $this->morphMany(Comment::class, 'commentable');
    }
}
