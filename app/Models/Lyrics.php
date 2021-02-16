<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lyrics extends Model
{
    //
    protected $table = 'lyrics';
    protected $fillable = ['title','artist','song_lyrics'];
}
