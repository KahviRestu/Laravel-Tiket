@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Tix.ID</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <form action="/dashboard/pesantiket/{{$jadwal->id}}" method="POST">
                                {{csrf_field()}}
                                <tr>
                                    <th>Nama Bis</th>
                                    <th>
                                        <input type="text" class="form-control" placeholder="Nama Bis" disabled name="nama" value="{{$jadwal->bis->nama}}">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Rute Perjalanan</th>
                                    <th>
                                        <input type="text" class="form-control" disabled name="rute" value="{{$jadwal->rute}}">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Total Biaya</th>
                                    <th>
                                        <input type="text" class="form-control" disabled name="biaya" value="{{$jadwal->biaya}}">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Jadwal Berangkat</th>
                                    <th>
                                        <input type="text" class="form-control" disabled name="jadwalBerangkat" value="{{$jadwal->jadwalBerangkat}}">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Atas Nama</th>
                                    <th>
                                        <input type="text" class="form-control"  name="nama_penumpang">
                                    </th>
                                </tr>
                                <tr>
                                    <th>No Hp</th>
                                    <th>
                                        <input type="text" class="form-control" name="noHp">
                                    </th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </th>
                                </tr>
                            </form>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection