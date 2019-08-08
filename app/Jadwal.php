<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['rute','jadwalBerangkat','biaya','bis_id'];

    public function bis()
    {
        return $this->belongsTo('App\Bis','bis_id');
    }

    public function tiket()
    {
        return $this->hasOne('App\Tiket');
    }
}

