@extends('layouts.master')

@section('content');
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                @foreach($jadwal as $l)
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$l->rute}}</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                Total Biaya : {{$l->biaya}} <br>
                                Jadwal Berangkat : {{$l->jadwalBerangkat}}
                            </p>
                            <a class="btn btn-primary btn-block" href="/dashboard/pemesanan/{{$l->id}}">Pesan</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection