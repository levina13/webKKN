@extends('layouts.dashboard')
@section('layout_title', 'Main')
@section('layout_content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('admin-page') }}">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Main</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-lg-2 col-sm-12 col-md-12 text-xl-center mb-3 mb-xl-0 d-flex align-items-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-12 col-md-12">
                            <div class="">
                                <h2 class="fw-extrabold h5">Pengguna</h2>
                                <h3 class="mb-1">{{ $jumlah_pengguna }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-lg-2 col-sm-12 col-md-12 text-xl-center mb-3 mb-xl-0 d-flex align-items-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <i class="fa-solid fa-utensils"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-12 col-md-12">
                            <div class="">
                                <h2 class="fw-extrabold h5">Kuliner</h2>
                                <h3 class="mb-1">{{$jumlah_kuliner}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-lg-2 col-sm-12 col-md-12 text-xl-center mb-3 mb-xl-0 d-flex align-items-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <i class="fa-solid fa-newspaper"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-12 col-md-12">
                            <div class="">
                                <h2 class="fw-extrabold h5">Berita</h2>
                                <h3 class="mb-1">{{ $jumlah_berita }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-lg-2 col-sm-12 col-md-12 text-xl-center mb-3 mb-xl-0 d-flex align-items-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <i class="fa-solid fa-image"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-12 col-md-12">
                            <div class="">
                                <h2 class="fw-extrabold h5">Galeri</h2>
                                <h3 class="mb-1">{{ $jumlah_galeri }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
