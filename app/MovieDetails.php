<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieDetails extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'id',
        'movie_name',
        'seats_available',
        'theatre_number',
        'movieimage'
        
        
    ];
}
