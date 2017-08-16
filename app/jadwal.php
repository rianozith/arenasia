<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $fillable = ['name', 'title', 'start_time', 'end_time'];
    
}
