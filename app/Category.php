<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//relacion hasMany
    public function books(){
    	return $this->hasMany(Book::class);
    }
}
