@extends('layout.master')

@section('title', 'Data Perjalanan')

@section('content')


<div class="card">
    <div class="card-header">
        <div class="card-header">
            <a href="{{ url('dataPerjalanan/create')}}" class="btn btn-primary">Tambah Data</a>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
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
                    <th>Devisi</th>
                    <th>Nama</th>
                    <th>Perihal</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data_perjalanans as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->noSuratTugas}}</td>
                    <td>{{$item->noSPPD}}</td>
                    <td>{{$item->tanggalSurat}}</td>
                    <td>{{$item->tanggalBerangkat}}</td>
                    <td>{{$item->devisi}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->prihal}}</td>
                </tr>

                @endforeach
            </tbody>

        </table>
    </div>

    {{-- <div class="card-header">
        <h1>Data Perjalanan Dinas Komisi</h1>
        <a href="#" class="btn btn-primary">Data Komisi</a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div> --}}

    {{-- <div class="card-body">
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
                <tr>
                    <td>1</td>
                    <td>24255578</td>
                    <td>A1010</td>
                    <td>10/20/2023</td>
                    <td>15/8/2023</td>
                    <td>Humas</td>
                    <td>Ryan Goslin</td>
                    <td>Kunjungan </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2223222</td>
                    <td>A202320</td>
                    <td>10/20/2023</td>
                    <td>10/20/2023</td>
                    <td>Humas</td>
                    <td>Rendi</td>
                    <td>Kunjungan </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>2223222</td>
                    <td>A202320</td>
                    <td>10/20/2023</td>
                    <td>10/20/2023</td>
                    <td>Humas</td>
                    <td>Rendi</td>
                    <td>Kunjungan </td>
                </tr>
            </tbody>

        </table>
    </div> --}}

    {{-- <div class="card-header">
        <h1>Data Perjalanan Dinas Setwan </h1>
        <a href="#" class="btn btn-primary">Data Setwan</a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div> --}}

    {{-- <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No.Surat Tugas</th>
                    <th>No.Spp</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal Berangkat</th>
                    <th>Setwan</th>
                    <th>Nama</th>
                    <th>Perihal</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>24255578</td>
                    <td>A1010</td>
                    <td>10/20/2023</td>
                    <td>15/8/2023</td>
                    <td>Humas</td>
                    <td>Ryan Goslin</td>
                    <td>Kunjungan </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2223222</td>
                    <td>A202320</td>
                    <td>10/20/2023</td>
                    <td>10/20/2023</td>
                    <td>Humas</td>
                    <td>Rendi</td>
                    <td>Kunjungan </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>2223222</td>
                    <td>A202320</td>
                    <td>10/20/2023</td>
                    <td>10/20/2023</td>
                    <td>Humas</td>
                    <td>Rendi</td>
                    <td>Kunjungan </td>
                </tr>
            </tbody>

        </table>
    </div> --}}

</div>
@endsection