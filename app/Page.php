<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name', 'body'];

    public function comments()
    {
    	return $this->morphMany(Comment::class, 'commentable');
    }
}
