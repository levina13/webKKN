@extends('layouts.public')
@section('layout_title', 'Kuliner Terpopuler')
@section('page_title', "Kuliner")
@section('layout_content')
<link rel="stylesheet" href="/layoutkuliner.css" />

		<p class="mt-3">
			Beberapa kuliner khas <br>
            di sekitar Sumber Banteng
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
            <div class="card border-0 shadow" style="margin-bottom: 40px !important">
                <div class="card-body">
				    <div class="row pt-4 gx-4 gy-4 d-flex justify-content-center">
                        @foreach ($kuliners as $kuliner)
                            <div class="col-md-3 col-6 col-sm-5 mb-4">
                                <div class="card" style="height: 100%">
                                    <img class="card-img-top" style="max-height: 150px" src="{{ urlencode($kuliner->foto) }}" alt="{{$kuliner->nama}}" />
                                    <div class="card-body">
                                        <h5 class="card-title">{{$kuliner->nama}}</h5>
                                        <p class="card-text">{!! $kuliner->deskripsi !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    </div>
                </div>
            </div>
            <div aria-label="Page navigation example" class="row" style="margin-top: 20px">
                {{ $kuliners->links() }}
            </div>
        </div>
    </section>
</main>
@endsection
