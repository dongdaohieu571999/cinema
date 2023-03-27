<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $primaryKey = 'booking_id';
    
    public function userid()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function showid() {
        return $this->belongsTo('App\Models\Show','show_id');
    }

    public $fillable = [
        'user_id','show_id','booking_date','seat_number'
    ];
}
