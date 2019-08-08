@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Bis</h3>
                    <div class="right">
                        <button type="button" class="btn"><i class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"></i></button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jumlah Kursi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bis as $s)
                            <tr>
                                <td>{{$s->nama}}</td>
                                <td>{{$s->jumlahKursi}}</td>
                                <td>
                                    <a href="/bis/edit/{{$s->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/bis/delete/{{$s->id}}" class="btn btn-danger">Hapus</a>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/bis/tambah" method="POST">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="form-group">
                    <label for="Nama">Nama Bis</label>
                    <input type="text" class="form-control" id="Nama" placeholder="Nama Bis" name="nama">
                </div>
                <div class="form-group">
                    <label for="jumlahKursi">Jumlah Kursi</label>
                    <input type="text" class="form-control" id="jumlahKursi" placeholder="Jumlah Kursi" name="jumlahKursi">
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
@endsection