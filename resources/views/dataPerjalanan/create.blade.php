@extends('layout.master')

@section('title', 'Tambah Data Perjalanan')

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
        <form action="{{ route('dataPerjalanan.store') }}" method="POST" enctype="multipart/form-data">
            {{-- Jika ada upload data tambahkan enctype="multipart/form-data" --}}
            @csrf

            <div class="form-group">
                <label for="noSuratTugas">No.Surat Tugas</label>
                <input type="text" class="form-control" name="noSuratTugas" placeholder="Masukan nomor surat Tugas">

                @error('noSuratTugas')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="noSPPD">No.SPP</label>
                <input type="text" class="form-control" name="noSPPD" placeholder="Masukan Nomor SPP">

                @error('noSPPD')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggalSurat">Tanggal Surat</label>
                <input type="date" class="form-control" name="tanggalSurat" placeholder="Masukan Tanggal Surat">

                @error('tanggalSurat')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggalBerangkat">Tanggal Berangkat</label>
                <input type="date" class="form-control" name="tanggalBerangkat" placeholder="Masukan Tanggal Berangkat">

                @error('tanggalBerangkat')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="devisi">Devisi</label>
                <input type="text" class="form-control" name="devisi" placeholder="Masukan Tanggal Berangkat">

                @error('devisi')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama ">
                {{-- <button onclick="showContent()"></button> --}}

                @error('nama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="prihal">Perihal</label>
                <input type="text" class="form-control" name="prihal" placeholder="Masukan Prihal perjalanan">

                @error('prihal')
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