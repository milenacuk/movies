<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];

    const VALIDATION_RULES = [
        'title'=>'required',
        'genre'=>'required',
        'director'=>'required',
        'year'=>'required|min:1990|max:2018|digits:4',
        'storyline' => 'required|max:1000'
    ];
}
