@extends('layouts.public')
@section('layout_title', 'Berita Terbaru')
@section('page_title', 'Berita terbaru')
@section('layout_content')
{{--<link rel="stylesheet" href="/layoutberita.css" />--}}


		<p class="mt-3">
			Kumpulan berita terbaru <br>
            di Wisata Sumber Banteng
		</p>
		{{-- <a href="{{ route('public.list_wisata') }}" class="btn btn-get-started px-4 mt-4"> --}}
			{{-- Destinasi Wisata --}}
		{{-- </a> --}}
	</header>
<main>
    <section class="section-popular main-section" style="margin-bottom: -500px !important" id="popular">
        <div class="container">
        </div>
    </section>

            <section class="section-popular-content" id="popularContent">
              <div class="container">
                    <div class="card border-0 shadow" style="margin-bottom: 40px">
                        <div class="card-body">
                          <div class="row mt-4 mb-4  justify-content-center">
                            @foreach ($beritas as $berita)
                              <div class="col-lg-6 col-sm-10 col-md-8 mb-2">
                                  <div class="card" style="">
                                      <img class="card-img-top" src="{{ urlencode($berita->foto) }}" alt="...." />
                                      <div class="card-body">
                                        <h5 class="card-title">{{$berita->judul}}</h5>
                                        <p class="card-text">{!!substr($berita->isi, 0, 200)!!}.....</p>
                                        <a href="{{ route('public.isiBerita', $berita->id_berita) }}" class="btn btn-primary">Full Story</a>
                                      </div>
                                    </div>
                              </div>
                            @endforeach
                          </div>
                        </div>
                    </div>
                    <div aria-label="Page navigation example" class="row" style="margin-top: 20px">
                        {{ $beritas->links() }}
                    </div>
              </div>
            </section>
</main>
@endsection
