@extends('songs.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Songs Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Song Title : {{ $songs->song_Title }}</h5>
        <p class="card-text">Song Genre : {{ $songs->song_Genre }}</p>
        <p class="card-text">Name of Composer : {{ $songs->name_of_Composer }}</p>
        <p class="card-text">Song Lyrics : {{ $songs->song_Lyrics }}</p>
        <p class="card-text">Year Created : {{ $songs->year_Created }}</p>
  </div>
       
    </hr>
  
  </div>
</div>