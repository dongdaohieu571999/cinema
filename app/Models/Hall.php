<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $table = 'hall';
    protected $primaryKey = 'hall_id';
    
    public function seat()
    {
        return $this->hasMany('App\Models\Seat');
    }

    public $fillable = [
        'hall_name'
    ];
}
