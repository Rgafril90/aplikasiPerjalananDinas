@extends('layout.master')

@section('title', 'Tambah Data Pegawai')

@section('content')

<div class="card">
    <div class="card-header">

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
        <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
            {{-- Jika ada upload data tambahkan enctype="multipart/form-data" --}}
            @csrf

            <div class="form-group">
                <label for="nik">Nik</label>
                <input type="text" class="form-control" name='nik' placeholder="Masukan nomor NIK">

                @error('nik')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name='nama' placeholder="Masukan Nama">

                @error('nama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name='alamat' placeholder="Masukan Alamat">

                @error('alamat')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" class="form-control" name='jenis_kelamin' placeholder="Masukan Jenis Kelamin">

                @error('jenis_kelamin')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name='tanggal_lahir' placeholder="Masukan Tanggal Lahir">

                @error('tanggal_lahir')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <div class="card-footer">

    </div>

</div>

@endsection