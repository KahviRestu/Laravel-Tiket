<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Bis;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        $bis = Bis::all();   
        return view('Jadwal.index',['jadwal' => $jadwal,'bis'=> $bis]);
    }

    public function tambah(Request $request)
    {
        $jadwal = Jadwal::create([
            'bis_id' => $request->bis,
            'rute' => $request->rute,
            'jadwalBerangkat' => $request->jadwalBerangkat,
            'biaya' => $request->biaya
        ]);
        return redirect('/jadwal');
    }

    public function edit($id)
    {
        $bis = Bis::all();
        $jadwal = Jadwal::find($id);
        return view('/Jadwal.edit',['jadwal'=>$jadwal,'bis'=> $bis]);
    }

    public function update($id, Request $request)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->update($request->all());

        return redirect('/jadwal');
    }

    public function hapus($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();

        return redirect('/jadwal');
    }
}
