<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentsController extends Controller
{
    public function store($movie_id){

        $movie = Movie::findOrFail($movie_id);

        $this->validate(
            request(),
             Comment::VALIDATION_RULES
            );

        $movie->comments()->create(request()->all());
        return redirect('/movies/{$movie_id}');
        
    }
}
