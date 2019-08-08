<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bis extends Model
{
    protected $table = 'bis';
    protected $fillable = ['nama','jumlahKursi'];

    public function jadwal()
    {
        return $this->hasOne('App\Jadwal');
    }
}
