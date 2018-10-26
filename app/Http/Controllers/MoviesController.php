<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view ('movies.index', ['movies'=>$movies]);
    }
    public function show($id){
        $movie = Movie::findOrFail($id);
        return view ('movies.show', ['movies'=>$movie]);
    }

    public function create(){
        return view ('movies.create');
    }
    public function store(){
        Movie::create(request()->all());
        return redirect('/movies');
    }
}