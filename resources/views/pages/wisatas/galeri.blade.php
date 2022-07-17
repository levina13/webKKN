@extends('layouts.public')
@section('layout_title', 'Galeri')
@section('page_title', 'Galeri Sumber Banteng')
@section('layout_content')
		{{-- <a href="{{ route('public.list_wisata') }}" class="btn btn-get-started px-4 mt-4"> --}}
			{{-- Destinasi Wisata --}}
		{{-- </a> --}}
	</header>
<main>

    <section class="section-popular main-section" id="popular" style="margin-bottom: -300px !important;">
        <div class="container">
            <section class="section-popular-content" id="popularContent">
                <div class="container">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="section-popular-travel row justify-content-center">
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
