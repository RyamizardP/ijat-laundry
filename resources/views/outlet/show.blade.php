@extends('layouts.template')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail Outlet</h3>
    </div>
    <div class="card-body">
        <a href="/outlet" class="btn btn-sm btn-primary">Kembali</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Nama Outlet</td>
                    <td>.</td>
                    <td>{{ $outlet->nama }}</td>
                </tr>
                <tr>
                    <td>Alamat Outlet</td>
                    <td>.</td>
                    <td>{{ $outlet->alamat }}</td>
                </tr>
                <tr>
                    <td>Tlp Outlet</td>
                    <td>.</td>
                    <td>{{ $outlet->tlp }}</td>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection