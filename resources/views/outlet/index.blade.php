@extends('layouts.template')

@section('content')

<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header bg-cyan">
            <h3 class="card-title"><b>DATA OUTLET</b>
                <a href="{{ url('outlet/create') }}" style="margin-left: 350px; box-shadow: 4px 4px 4px LightGrey; color: white; background-color: orange; border-radius: 8px;" class="btn btn-sm btn-DodgerBlue"><strong>TAMBAH DATA</strong></a>
            </h3>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Nama Outlet</td>
                        <td>Alamat Outlet</td>
                        <td>Telepon Outlet</td>
                        <td class="text-center">Aksi</td>
                    <tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($outlet as $i)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $i->nama }}</td>
                        <td>{{ $i->alamat }}</td>
                        <td>{{ $i->tlp }}</td>
                        <td class="text-center">
                            <a href="/outlet/show/{{ $i->id }}" class="btn btn-sm btn-success">Detail</a>
                            <a href="/outlet/edit/{{ $i->id }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center bg-gray">
            <strong>&copy; Ryamizard.</strong>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>

@endsection