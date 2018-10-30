<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Comment extends Model
{
    protected $guarded = ['id'];

    const VALIDATION_RULES = [
        'content'=>'required|max:1000'
        
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }
}
