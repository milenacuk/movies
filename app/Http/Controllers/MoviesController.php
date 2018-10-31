<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class MoviesController extends Controller
{
    public function index(){
        //$movies = Movie::all();
        $movies = Movie::orderBy('created_at','DESC')->get();
        return view ('movies.index', ['movies'=>$movies]);
    }
    public function show($id){
        //$movie = Movie::findOrFail($id);
        $movie = Movie::with('comments')->findOrFail($id);
        return view ('movies.show', ['movie'=>$movie]);
    }

    public function create(){
        return view ('movies.create');
    }
    public function store(){

        $this->validate(
            request(),
             Movie::VALIDATION_RULES
            );

        $movie = Movie::create(request()->all());
        //return redirect('/movies');
        return view('movies.show', ['movie'=>$movie]);
        
    }
}
