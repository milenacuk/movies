@extends('layouts.master')

@section('title')
    {{ $movie -> title}}
@endsection

@section('storyline')


<div class="blog-movie">
        <h2 class="blog-movie-title">
            {{ $movie->title }}
        </h2>
        <p><b>Genre mouvie: </b><a href="/genres/{{$movie->genre}}">{{ $movie->genre }}</a> </p>         
        <p><b>Year of publication: </b>{{$movie ->year}}</p>
        <p><b>Director: </b>{{ $movie-> director}}</p>
        <p><b>Storyline: </b>{{$movie ->storyline}}</p>
    
  
    <h4>Comments:</h4>   
        <ul>
            @foreach($movie->comments as $comment)
        <li>
                <p><b>Post at: </b>{{$comment->created_at}}</p>
                <p>{{$comment->content}}</p>

        </li>
            @endforeach
        </ul>
    
<form method = 'post' action='/movies/{{$movie->id}}/comments'>

{{ csrf_field() }}

<div class="form-group">
    <label for="content">Post a comment:</label>
<input name = 'content' type="text" class="form-control" id="content"  placeholder="Enter comment">   
@include('layouts.error-message',
['field' => 'content'])
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div> 
@endsection
