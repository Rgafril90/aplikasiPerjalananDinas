@extends('layout.master')

@section('title', 'Data Komisi')

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
                    <th>No.Surat Tugas</th>
                    <th>No.Spp</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal Berangkat</th>
                    <th>Komisi</th>
                    <th>Nama</th>
                    <th>Perihal</th>
                </tr>
            </thead>

            <tbody>

            </tbody>
        </table>
    </div>

</div>
@endsection