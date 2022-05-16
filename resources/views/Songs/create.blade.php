@extends('songs.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add Songs Page</div>
  <div class="card-body">
      
      <form action="{{ url('songs') }}" method="POST">
        {!! csrf_field() !!}
        <label>Song Title</label></br>
        <input type="text" name="song_Title" id="song_Title" class="form-control"></br>
        <label>Song Genre</label></br>
        <input type="text" name="song_Genre" id="song_Genre" class="form-control"></br>
        <label>Name of Composer</label></br>
        <input type="text" name="name_of_Composer" id="name_of_Composer" class="form-control"></br>
        <label>Song Lyrics</label></br>
        <input type="text" name="song_Lyrics" id="song_Lyrics" class="form-control"></br>
        <label>Year Created</label></br>
        <input type="text" name="year_Created" id="year_Created" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop