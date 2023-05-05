@extends('layout.master')

@section('title', 'Data Pegawai')

@section('content')


<div class="card">
    <div class="card-header">
        <a href="#" class="btn btn-primary">Tambah Data</a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                </tr>
            </thead>

            <tbody>
                @foreach($pegawais as $item)
                <td>{{ $item->id }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->jenis_kelamin}}</td>
                <td>{{ $item->tanggal_lahir}}</td>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection