<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAZA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins') }}/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css') }}/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"
                            style="color: #000000;"></i></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/profile') }}" class="nav-link"><i class="fas fa-user-circle"
                            style="color: #000000;"></i></a>
                </li>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/contact') }}" class="nav-link"><i class="fas fa-user"
                            style="color: #000000;"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/produk') }}" class="nav-link"><i class="fas fa-store"
                            style="color: #000000;"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/faq') }}" class="nav-link"><i class="fas fa-question-circle"
                            style="color: #000000;"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                </div>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img') }}/Faza.jpeg" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Muchamad Faza Fadillah</a>
                    </div>
                </div>
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                                <i class="fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/profile') }}" class="nav-link">
                                <i class="fas fa-user-circle"></i>
                                <p>
                                    Profile
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}" class="nav-link">
                                <i class="fas fa-user"></i>
                                <p>
                                    Contact
                                    {{-- <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/produk') }}" class="nav-link">
                                <i class="fas fa-store"></i>
                                <p>
                                    Produk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/pelanggan') }}" class="nav-link">
                                <i class="fas fa-surprise"></i>
                                <p>
                                    Pelanggan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/barang') }}" class="nav-link">
                                <i class="fas fa-box"></i>
                                <p>
                                    Barang
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/pemasok') }}" class="nav-link">
                                <i class="fas fa-people-carry"></i>
                                <p>
                                    Pemasok
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/penjualan') }}" class="nav-link">
                                {{-- <i class="fas fa-user-circle"></i> --}}
                                <i class="fas fa-user-circle fa-spin"></i>
                                <p>
                                    Penjualan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/pembelian') }}" class="nav-link">
                                <i class="fas fa-store-circle"></i>
                                <p>pembelian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/faq') }}" class="nav-link">
                                <i class="fas fa-question-circle"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/logout') }}" class="nav-link">
                                <i class="fas fa-door-open"></i>
                                <p>Log out</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i
                                            class="fas fa-home"></i></a></li>
                                {{-- <li class="breadcrumb-item active">Blank Page</li> --}}
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('templates.footer')
