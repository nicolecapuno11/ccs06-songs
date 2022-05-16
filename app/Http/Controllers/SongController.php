<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view ('songs.index')->with('songs', $songs);
    }
 
    public function create()
    {
        return view('songs.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Song::create($input);
        return redirect('songs')->with('flash_message', 'Song Added');  
    }

    public function show($id)
    {
        $songs = Song::find($id);
        return view('songs.show')->with('songs', $songs);
    }

    public function edit($id)
    {
        $songs = Song::find($id);
        return view('songs.edit')->with('songs', $songs);
    }

    public function update(Request $request, $id)
    {
        $songs = Song::find($id);
        $input = $request->all();
        $songs->update($input);
        return redirect('songs')->with('flash_message', 'Song Updated');  
    }
}
