@extends('layouts.master')

@section('title')
    Create movie    
@endsection

@section('storyline')
<form method = 'post' action='/movies'>

        {{ csrf_field() }}

  <div class="form-group">
    <label for="title">Title</label>
    <input name = 'title' type="title" class="form-control" id="title"  placeholder="Enter title">   
    @include('layouts.error-message',
    ['field' => 'title'])
  </div>
  <div class="form-group">
    <label for="genre">Genre</label>
    <input name = 'genre' type="text" class="form-control" id="genre"  placeholder="Enter genre">   
    @include('layouts.error-message',
    ['field' => 'genre'])
  </div>
  <div class="form-group">
    <label for="director">Director</label>
    <input name = 'director' type="text" class="form-control" id="director"  placeholder="Enter director">   
    @include('layouts.error-message',
    ['field' => 'director'])
  </div>
  <div class="form-group">
    <label for="year">Year</label>
    <input name = 'year' type="number" class="form-control" id="year"  placeholder="Enter year">   
    @include('layouts.error-message',
    ['field' => 'year'])
  </div>
  <div class="form-group">
    <label >Storyline</label>
    <textarea name="storyline" type = 'text' class="form-control" id="storyline"  placeholder="Enter storyline"></textarea> 
    @include('layouts.error-message',
    ['field' => 'storyline'])
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection