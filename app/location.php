<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $fillable = ['location_name', 'longitude', 'latitude', 'description'];

    public function venue(){
    	$this->belongTo('App\venue');
    }
}
