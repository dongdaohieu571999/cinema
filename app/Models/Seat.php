<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $table = 'seats';

    protected $fillable = [
        'hall_id',
        'seat_row',
        'seat_number',
        'isEmpty'
    ];

    protected $primaryKey = 'seat_id';

    public function hallid() {
        return $this->belongsTo('App\Models\Hall','hall_id');
    }


}
