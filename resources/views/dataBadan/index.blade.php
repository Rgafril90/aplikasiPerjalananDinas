@extends('layout.master')

@section('title', 'Data Badan')

@section('content')


<div class="card">
    <div class="card-header">
        <a href="{{ url('pegawai/create')}}" class="btn btn-primary">Tambah Data</a>

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
                    <th>Id_Pegawai</th>
                    <th>Nama_Pegawai</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($badans as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->id_badan}}</td>
                    <td>{{$item->nama_badan}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection