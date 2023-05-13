@extends('layout.master')

@section('title', 'Tambah Data Perjalanan')

@section('content')

<div class="card">
    {{-- <div class="card-header">
        <a href="{{ url('pegawai/create')}}" class="btn btn-primary">Tambah Data Perjalanan Dinas Badan</a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div> --}}

    <div class="">
        <div class="info-box">
            <a href="{{ url('pegawai/create')}}" class="info-box-icon bg-success"><i class="far fa-flag"></i></a>
            <div href="{{ url('pegawai/create')}}" class="info-box-content">
                <a href="{{ url('pegawai/create')}}" class="info-box-text">Tambah Data Perjalanan Dinas Badan</a>
                <span class="info-box-number"></span>
            </div>

        </div>

        <div class="">
            <div class="info-box">
                <a href="{{ url('pegawai/create')}}" class="info-box-icon bg-success"><i class="far fa-flag"></i></a>
                <div href="{{ url('pegawai/create')}}" class="info-box-content">
                    <a href="{{ url('pegawai/create')}}" class="info-box-text">Tambah Data Perjalanan Dinas Komisi</a>
                    <span class="info-box-number"></span>
                </div>

            </div>

            <div class="">
                <div class="info-box">
                    <a href="{{ url('pegawai/create')}}" class="info-box-icon bg-success"><i
                            class="far fa-flag"></i></a>
                    <div href="{{ url('pegawai/create')}}" class="info-box-content">
                        <a href="{{ url('pegawai/create')}}" class="info-box-text">Tambah Data Perjalanan Dinas
                            Setwan</a>
                        <span class="info-box-number"></span>
                    </div>

                </div>

            </div>
            @endsection