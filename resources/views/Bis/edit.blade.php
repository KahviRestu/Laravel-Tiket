@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Bis</h3>
                                <div class="right">
                                    <a href="/bis" class="btn"><i class="lnr lnr-cross"></i></a>
                                </div>
                            </div>
                            <form action="/bis/update/{{$bis->id}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Nama">Nama</label>
                                        <input type="text" class="form-control" id="Nama" placeholder="Nama" name="nama" value="{{$bis->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlahKursi">Jumlah Kursi</label>
                                        <input type="text" class="form-control" id="jumlahKursi" placeholder="Jumlah Kursi" name="jumlahKursi" value="{{$bis->jumlahKursi}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            </form>
						</div>          
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection