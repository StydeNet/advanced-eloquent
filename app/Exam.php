<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'title',
    ];

    public function users()
    {
    	return $this->belongsToMany(User::class)
            ->withPivot('punctuation')
            ->withTimestamps();
    }

}
