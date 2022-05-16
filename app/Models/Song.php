<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = 'song';
    protected $primaryKey = 'id';
    protected $fillable = ['song_Title', 'song_Genre', 'name_of_Composer', 'song_Lyrics', 'year_Created'];
}
