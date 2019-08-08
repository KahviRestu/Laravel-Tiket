@extends('layouts.master')

@section('content');
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Pemesanan</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama Bis</th>
                                <th>Rute</th>
                                <th>Jadwal Berangkat</th>
                                <th>Biaya</th>
                                <th>Atas Nama</th>
                                <th>No Hp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tiket as $t)
                            <tr>
                                <td>{{$t->jadwal->bis->nama}}</td>
                                <td>{{$t->jadwal->rute}}</td>
                                <td>{{$t->jadwal->jadwalBerangkat}}</td>
                                <td>{{$t->jadwal->biaya}}</td>
                                <td>{{$t->nama_penumpang}}</td>
                                <td>{{$t->noHp}}</td>
                                <td>
                                    <a href="/" class="btn btn-primary">Konfirmasi</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop