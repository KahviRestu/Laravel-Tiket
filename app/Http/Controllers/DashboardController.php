<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Tiket;
use App\Pembayaran;

class DashboardController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('Dashboard.index',['jadwal'=>$jadwal]);
    }

    public function pemesanan($id)
    {
        $jadwal = Jadwal::find($id);
        return view('Dashboard.pemesanan',['jadwal'=>$jadwal]);
    }

    public function pesanTiket($id, Request $request)
    {
        $tiket = Tiket::create([
            'jadwal_id' => $id,
            'nama_penumpang' => $request->nama_penumpang,
            'noHp' => $request->noHp
        ]);
        return redirect('/cekTiket'); 
    }

    public function cekTiket()
    {
        $tiket = Tiket::all();
        return view('Dashboard.cekTiket',['tiket'=>$tiket]);
    }

    public function hapus($id)
    {
        $tiket = Tiket::find($id);
        $tiket->delete();
        return redirect('/cekTiket');
    }

    public function bayar($id)
    {
        $bayarTiket = Tiket::find($id);
        return view('Dashboard.bayarTiket',['bayarTiket' => $bayarTiket]);
    }

    public function bayarTiket($id, Request $request)
    {
        $bayarTiket = Pembayaran::create([
            'tiket_id' => $id,
            'nama_bank' => $request->nama_bank,
            'norek' => $request->norek
        ]);
        return redirect('/cekTiket');
    }
}
