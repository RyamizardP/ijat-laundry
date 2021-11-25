@extends('layouts.template')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambahkan Outlet</h3>
    </div>
    <div class="card-body">
        <form action="/outlet/update/{{ $outlet->id }}" method="POST">
            @csrf
            <div class="content">
                <div class="row">
                    <div class="col col-sm-6">
                        <div class="form-group">
                            <label class="label-control">Update</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $outlet->nama }}" placeholder="masukan nama">
                            <div class="text-danger">
                                @error('nama')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-control">Alamat outlet</label>
                            <textarea name="alamat"  id="" cols="20" rows="5" class="form-control @error('alamat') is-invalid @enderror" placeholder="masukan alamat kamu">{{ $outlet->alamat }}</textarea>
                            <div class="text-danger">
                                @error('alamat')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-control">No Telepon</label>
                            <input type="number" class="form-control @error('tlp') is-invalid @enderror" name="tlp" value="{{ $outlet->tlp }}" placeholder="masukan nomor telepon">
                            <div class="text-danger">
                                @error('tlp')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection