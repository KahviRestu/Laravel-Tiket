<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = ['nama_bank','norek','tiket_id'];

    public function tiket()
    {
        return $this->belongsTo('App\Tiket');
    }
}
