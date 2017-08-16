<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = ['tanggal_booking', 'tanggal_main', 'lama_mail'];
}
