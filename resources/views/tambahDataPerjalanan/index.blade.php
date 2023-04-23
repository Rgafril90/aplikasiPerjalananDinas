@extends('layout.master')

@section('title', 'Tambah Data Perjalanan')

@section('content')

<div class="card-body">
    <div class="form-group">
        <label for="">No.Surat Tugas</label>
        <input type="text" class="form-control" id="" placeholder="Masukan nomor surat Tugas">
    </div>

    <div class="form-group">
        <label for="">No.SPP</label>
        <input type="text" class="form-control" id="" placeholder="Masukan Nomor SPP">
    </div>

    <div class="form-group">
        <label for="">Tanggal Surat</label>
        <input type="date" class="form-control" id="" placeholder="Masukan Tanggal Surat">
    </div>

    <div class="form-group">
        <label for="">Tanggal Berangkat</label>
        <input type="date" class="form-control" id="" placeholder="Masukan Tanggal Berangkat">
    </div>

    <div class="form-group">
        <label for="">Badan/Devisi</label>
        <input type="text" class="form-control" id="" placeholder="Masukan Badan/Devisi bagian mana">
    </div>

    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" id="" placeholder="Masukan Nama ">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Perihal</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Prihal perjalanan">
    </div>

    {{-- Input File --}}
    {{-- <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Upload</span>
            </div>
        </div>
    </div> --}}

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>


</div>
@endsection