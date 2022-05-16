@extends('songs.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Song Page</div>
  <div class="card-body">
      
      <form action="{{ url('songs/' .$songs->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$songs->id}}" id="id" />
        <label>Song Title</label></br>
        <input type="text" name="song_Title" id="song_Title" value="{{$songs->song_Title}}" class="form-control"></br>
        <label> Song Genre</label></br>
        <input type="text" name="song_Genre" id="song_Genre" value="{{$songs->song_Genre}}" class="form-control"></br>
        <label>Name of Composer</label></br>
        <input type="text" name="name_of_Composer" id="name_of_Composer" value="{{$songs->name_of_Composer}}" class="form-control"></br>
        <label>Song Lyrics</label></br>
        <input type="text" name="song_Lyrics" id="song_Lyrics" value="{{$songs->song_Lyrics}}" class="form-control"></br>
        <label>Year Created</label></br>
        <input type="text" name="year_Created" id="year_Created" value="{{$songs->year_Created}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop