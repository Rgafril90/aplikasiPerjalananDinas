<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DPRD Kota Palembang</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">

    {{-- ambil sytle.css --}}
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">

    <script nonce="b1c6d127-4235-4502-8b98-aae7da4d8ccd">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.q = [], a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a
                        .screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a
                        .zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e
                        .referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a
                        .zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;
                    ) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0, z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(
                        encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z,
                        t)
                }))
            }(w, d, 0, "script");
        })(window, document);
    </script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url ('dashboard') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container Start-->
        <aside class="main-sidebar sidebar-dark-primary">
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src="dist/img/Logo_Kota_Palembang-removebg-preview.png" alt="Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">DPRD Kota Palembang</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar MainMenu Start -->
                <nav class="sidebar-menu">
                    <ul class=" nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="{{url ('dashboard') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        {{-- Tabel Data Pegawai --}}
                        <li class="nav-item">
                            <a href="{{url ('pegawai') }}" class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data Pegawai
                                </p>
                            </a>

                        </li>

                        {{-- tabel Badan --}}
                        <li class="nav-item">
                            <a href="{{url ('dataBadan') }}" class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data Badan
                                </p>
                            </a>

                        </li>

                        {{-- tabel Badan --}}
                        <li class="nav-item">
                            <a href="{{url ('dataKomisi') }}" class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data Komisi
                                </p>
                            </a>

                        </li>

                        {{-- tabel Setwan --}}
                        <li class="nav-item">
                            <a href="{{url ('dataSetwan') }}" class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data Setwan
                                </p>
                            </a>

                        </li>

                        {{-- tabel Perjalanan dinas --}}
                        <li class="nav-item">
                            <a href="{{url ('dataPerjalanan') }}" class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data Perjalanan
                                </p>
                            </a>

                        </li>

                        {{-- Jumlah File --}}
                        {{-- <li class="nav-item">
                            <a href="{{url ('tambahDataPerjalanan')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Tambah Data Perjalanan
                                </p>
                            </a>
                        </li> --}}

                        <li class="nav-header">Keterangan</li>

                        {{-- Galery Perjalanan Dinas --}}
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        {{-- kaleneder hari --}}
                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Calendar
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>

                        {{-- Keterangan --}}
                        <li class="nav-header">Keterangan</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Label
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <ul class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <p class="text">Important</p>
                                    </a>
                                </ul>
                                <ul class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Warning</p>
                                    </a>
                                </ul>
                                <ul class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p>Informational</p>
                                    </a>
                                </ul>
                            </ul>
                        </li>


                </nav>
                <!-- /.sidebar-menu End-->
            </div>
            <!-- /.Side menu -->
        </aside>
        <!-- Main Sidebar Container End-->

        <!-- Content Wrapper. Contains page content Start -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{-- <h1 class="m-0">Dashboard</h1> --}}
                            {{-- <li class="breadcrumb-item active">@yield('title')</li> --}}
                            <h1>@yield('title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Logout</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            {{-- Main Content End --}}

        </div>
        <!-- /.content-wrapper End-->

        <!-- Control Sidebar Start-->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar End-->

    </div>
    <!-- ./wrapper -->

    {{-- diambil dari lokasi plugins --}}
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    {{-- diambil dari lokasi dist --}}
    <script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    <script src="{{ asset('dist/js/responsiveNavigation.js') }}"></script>



    <script src="{{ asset('http:/code.jquery.com/jquery-3.3.3.1.js') }}"></script>
    <script type="{{ asset('text/javascript') }}">
        $(document).ready(function(){
            $('li').on('click', function(){
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            })
        })
    </script>

    <script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0') }}">
    </script>


    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>


</body>

</html>