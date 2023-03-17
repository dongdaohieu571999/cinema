<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movie';
    protected $primaryKey = 'm_id';
    
    public function show()
    {
        return $this->hasMany('App\Models\Show');
    }

    public $fillable = [
        'name','director','actors','duration','genre','premiere','language','movie_banner','now_playing','coming_soon'
    ];
}
