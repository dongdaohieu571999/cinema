<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movie';

    protected $fillable = [
        'name',
        'director',
        'actors',
        'duration',
        'genre',
        'description',
        'premiere',
        'language',
        'movie_banner',
        'now_playing',
        'coming_soon'
    ];

    protected $primaryKey = 'm_id';
}
