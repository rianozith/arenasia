<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lapangan extends Model
{
    protected $fillable = ['nama_lapangan', 'status_lapangan', 'harga_lapangan', 'foto_lapangan', 'booking_id', 'jadwal_id', 'venue_id'];

    public function venue(){
    	$this->belongTo('App\venue');
    }
}
