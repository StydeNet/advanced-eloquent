<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    //relación belongsTo
    public function Category(){
    	return $this->belongsTo(Category::class);
    }
}
