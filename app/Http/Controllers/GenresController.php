<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
    public function show($genre){
        //$movie = Movie::findOrFail($id);
        $movies = Movie::where('genre',$genre)->get();
        //$genres = Movie::getGenre($genre);
        return view ('movies.index', ['movies' => $movies]);
    }
}
