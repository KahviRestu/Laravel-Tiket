@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Jadwal</h3>
                    <div class="right">
                        <button type="button" class="btn"><i class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"></i></button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama Bis</th>
                                <th>Rute</th>
                                <th>Jadwal Berangkat</th>
                                <th>Biaya</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($jadwal as $l)
                            <tr>
                                <td>{{$l->bis->nama}}</td>
                                <td>{{$l->rute}}</td>
                                <td>{{$l->jadwalBerangkat}}</td>
                                <td>{{$l->biaya}}</td>
                                <td>
                                    <a href="/jadwal/edit/{{$l->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/jadwal/delete/{{$l->id}}" class="btn btn-danger">Hapus</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jadwal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/jadwal/tambah" method="POST">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="form-group">
                    <label for="bis">Nama Bis</label>
                    <select class="form-control" id="bis" name="bis">
                        @foreach($bis as $s)
                        <option value="{{$s->id}}">{{$s->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rute">Rute</label>
                    <input type="text" class="form-control" id="rute" placeholder="Rute" name="rute">
                </div>
                <div class="form-group">
                    <label for="jadwalBerangkat">Jadwal Berangkat</label>
                    <input type="date" class="form-control" id="jadwalBerangkat" placeholder="Jadwal Berangkat" name="jadwalBerangkat">
                </div>
                <div class="form-group">
                    <label for="biaya">Biaya</label>
                    <input type="text" class="form-control" id="biaya" placeholder="Biaya" name="biaya">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>
@stop