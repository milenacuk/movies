@extends('layouts.master')

@section('title')
    All movies
@endsection

@section('storyline')
@if($movies)
    <ul>
    @foreach($movies as $movie)

        <li>                 
            <a href="/movies/{{$movie->id}}" >
                {{$movie->title}}
            </a>
                   <p> {{ $movie -> storyline }}</p>
                
</li> 
    @endforeach
    </ul>
    @endif
@endsection
