@extends('layout.master')

@section('title', 'Data Perjalanan')

@section('content')


<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>

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
                    <th>Badan</th>
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
    </div>

</div>
@endsection