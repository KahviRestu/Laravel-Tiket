<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bis;

class BisController extends Controller
{
    public function index()
    {
        $bis = Bis::all();
        return view('Bis.index',['bis' => $bis]);
    }

    public function tambah(Request $request)
    {
        $bis = Bis::create($request->all());
        return redirect()->back();
    }

    public function edit($id)
    {
        $bis = Bis::find($id);
        return view('/Bis.edit',['bis'=>$bis]);
    }

    public function update($id, Request $request)
    {
        $bis = Bis::find($id);
        $bis->update($request->all());

        return redirect('/bis');
    }

    public function hapus($id)
    {
        $bis = Bis::find($id);
        $bis->delete();
        
        return redirect('/bis');
    }
}
