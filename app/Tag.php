<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title'];

    public function posts()
    {
    	return $this->morphToMany(Post::class, 'taggable');
    }

    public function videos()
    {
    	return $this->morphToMany(Video::class, 'taggable');
    }
}
