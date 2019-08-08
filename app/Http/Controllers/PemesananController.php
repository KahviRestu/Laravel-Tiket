<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket;

class PemesananController extends Controller
{
    public function index()
    {
        $tiket = Tiket::all();
        return view('Pemesanan.index',['tiket' => $tiket]);
    }
}
