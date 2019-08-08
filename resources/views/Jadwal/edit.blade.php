@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Jadwal</h3>
                                <div class="right">
                                    <a href="/jadwal" class="btn"><i class="lnr lnr-cross"></i></a>
                                </div>
                            </div>
                            <form action="/jadwal/update/{{$jadwal->id}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="bis">Nama Bis</label>
                                        <select class="form-control" id="bis" name="bis">
                                            <option value="">--Pilih</option>
                                            @foreach($bis as $s)
                                            <option value="{{$s->id}}">{{$s->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="rute">Rute</label>
                                        <input type="text" class="form-control" id="rute" placeholder="Rute" name="rute" value="{{$jadwal->rute}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jadwalBerangkat">Jadwal Berangkat</label>
                                        <input type="text" class="form-control" id="jadwalBerangkat" placeholder="Jadwal Berangkat" name="jadwalBerangkat" value="{{$jadwal->jadwalBerangkat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="biaya">Biaya</label>
                                        <input type="text" class="form-control" id="biaya" placeholder="Biaya" name="biaya" value="{{$jadwal->biaya}}">
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