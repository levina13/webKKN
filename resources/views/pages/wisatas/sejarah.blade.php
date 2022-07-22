@extends('layouts.public')
@section('layout_title', 'Sejarah')
@section('page_title', 'Sejarah Wisata Sumber Banteng')
@section('layout_content')
<link rel="stylesheet" href="/layoutsejarah.css" />
		{{-- <p class --}}
		{{-- <a href="{{ route('public.list_wisata') }}" class="btn btn-get-started px-4 mt-4"> --}}
			{{-- Destinasi Wisata --}}
		{{-- </a> --}}
	</header>
<main>

    <section class="section-popular main-section" id="popular" style="margin-bottom: -20px !important;">
        <div class="container">
            <section class="section-popular-content" id="popularContent">
                <div class="container">
                    <div class="card border-0 shadow" style="margin-bottom: 40px">
                        <div class="card-body">
                            {{--<div class="section-popular-travel row justify-content-center">--}}
    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8s col-sm-10 ">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ urlencode($sejarah->foto) }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        {!!$sejarah->isi!!}
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->
                                {{-- @foreach ($wisatas as $wisata)
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="border-0 shadow rounded card-travel text-center d-flex flex-column" style="background-image: url('{{ urlencode($wisata->gambar) }}');" >
                                        <div class="travel-country">{{ $wisata->nama_kecamatan }}</div>
                                        <div class="travel-location">{{ $wisata->nama }}</div>
                                        <div class="travel-button mt-auto">
                                            <a href="{{ route('public.wisata', $wisata->id_objek_wisata) }}" class="btn btn-travel-details px-4">
                                                Detail Wisata
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                    <div aria-label="Page navigation example" class="row" style="margin-top: 20px">
                        {{-- {{ $wisatas->links() }} --}}
                    </div>
                </div>
        </div>
    </section>


    </section>
</main>
@endsection
