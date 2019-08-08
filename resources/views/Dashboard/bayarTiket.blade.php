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
                            <form action="/cekTiket/bayarTiket/{{$bayarTiket->id}}" method="POST">
                                {{csrf_field()}}
                                <tr>
                                    <th>Nama Bank</th>
                                    <th>
                                        <input type="text" class="form-control" name="nama_bank">
                                    </th>
                                </tr>
                                <tr>
                                    <th>No Rekening</th>
                                    <th>
                                        <input type="text" class="form-control"  name="norek">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Total Biaya</th>
                                    <th>
                                        <input type="text" class="form-control" disabled name="biaya" value="{{$bayarTiket->jadwal->biaya}}">
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