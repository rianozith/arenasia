<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venue extends Model
{
    protected $fillable = ['nama_venue', 'alamat_venue', 'telp_venue', 'info_venue'];

    public function lapangan(){
		return $this->hasMany('App\lapangan');
	}

	public function location(){
		return $this->hasOne('App\location');
	}
}
