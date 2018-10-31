@extends('layouts.master')

@section('title')
    All Movies
@endsection

@section('storyline')

<h3>All Movies</h3>   
        <ul>
            @foreach($genres as $genre)
        <li>
                <p><b>Title movie: </b>{{$genre-content}}</p>
                
        </li>
            @endforeach
        </ul>
        @include('movies.partials.sidebar')
@endsection