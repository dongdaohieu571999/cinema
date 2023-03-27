<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $table = 'show';
    protected $primaryKey = 'show_id';
    public $timestamps = false;    
    protected $fillable = [
        'm_id',
        'hall_id', 
        'stt_time', 
        'showdate', 
    ];
    public function hallid() {
        return $this->belongsTo('App\Models\Hall','hall_id');
    }
    public function mid() {
        return $this->belongsTo('App\Models\Movie','m_id');
    }

    public function booking()
    {
        return $this->hasMany('App\Models\Booking');
    }



}
