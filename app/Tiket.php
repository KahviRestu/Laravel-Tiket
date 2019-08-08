<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tiket';
    protected $fillable = ['nama_penumpang','noHp','jadwal_id'];

    public function jadwal()
    {
        return $this->belongsTo('App\Jadwal','jadwal_id');
    }

    public function pembayaran()
    {
        return $this->hasOne('App\Pebayaran');
    }
}
