@extends('layouts.master')

@section('title')
    {{ $movies -> title}}
@endsection

@section('storyline')


<div class="blog-movie">
        <h2 class="blog-movie-title">
            {{ $movies->title }}
        </h2>
        <p><b>Genre mouvie: </b> {{ $movies->genre }}</p>         
        <p><b>Year of publication: </b>{{$movies ->year}}</p>
        <p><b>Director: </b>{{ $movies-> director}}</p>
        <p><b>Storyline: </b>{{$movies ->storyline}}</p>
    </div>   

    
@endsection
