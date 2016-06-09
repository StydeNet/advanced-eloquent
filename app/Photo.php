<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'photo', 'user_id',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
