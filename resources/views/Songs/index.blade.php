@extends('songs.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>WELCOME TO SONGS</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/songs/create') }}" class="btn btn-success btn-sm" title="Add New Song">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Song Title</th>
                                        <th>Song Genre</th>
                                        <th>Name of Composer</th>
                                        <th>Song Lyrics</th>
                                        <th>Year Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($songs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->song_Title }}</td>
                                        <td>{{ $item->song_Genre }}</td>
                                        <td>{{ $item->name_of_Composer }}</td>
                                        <td>{{ $item->song_Lyrics }}</td>
                                        <td>{{ $item->year_Created }}</td>

 
                                        <td>
                                            <a href="{{ url('/songs/' . $item->id) }}" title="View Song"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/songs/' . $item->id . '/edit') }}" title="Edit Song"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/songs' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Song" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection