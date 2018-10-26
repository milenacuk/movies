@extends('layouts.master')

@section('title')
    All movies
@endsection

@section('storyline')

    <ul>
    @foreach($movies as $movie)

        <li>
        <div class="blog-movie">
                    <h2 class="blog-movie-title">
                        <a href="/movies/{{$movie->id}}" >
                        {{$movie->title}}
                        </a>
                    </h2>
                   <p> {{ $movie -> storyline }}</p>
                </div>  
                </li> 
    @endforeach
    </ul>
@endsection
