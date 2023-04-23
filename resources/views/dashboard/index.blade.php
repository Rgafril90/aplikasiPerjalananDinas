@extends('layout.master')

@section('title', 'Dashboard')

@section('content')


<div class="content">

    <div id="carouselExampleIndicators" class="carousel slide border border-dark" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="dist/img/Dprd 2.jpg" width="1200" height="450" style="border:0;" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="dist/img/Dprd 2.jpg" width="1200" height="450" style="border:0;" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="dist/img/Dprd 2.jpg" width="1200" height="450" style="border:0;" class="d-block w-100"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <p> </p>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15937.544662062406!2d104.7489041754198!3d-2.9901737651564595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9df3c2b032df%3A0xaa0a8951c413585f!2sKantor%20DPRD%20Kota%20Palembang!5e0!3m2!1sid!2sid!4v1680287274077!5m2!1sid!2sid"
        width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="d-block w-100 "
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <P>

    </P>
    <div class="container-fluid">
        <h5 class="mb-2">Info Box</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Buku Tamu</span>
                        <span class="info-box-number">1,410</span>
                    </div>

                </div>

            </div>

            <div class="col-md-6">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Perjalanan Dinas</span>
                        <span class="info-box-number">410</span>
                    </div>

                </div>

            </div>
            @endsection