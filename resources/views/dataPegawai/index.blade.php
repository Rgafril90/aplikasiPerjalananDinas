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
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Badan</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Yusuf</td>
                    <td>1621213456787</td>
                    <td>Humas</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Yunus</td>
                    <td>16212144448983</td>
                    <td>Humas</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>yanto</td>
                    <td>167787879990009</td>
                    <td>Humas</td>
                </tr>
            </tbody>

        </table>
    </div>

</div>
@endsection