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

    <section class="section-popular main-section" id="popular" style="margin-bottom: -100px !important;">
        <div class="container">
            <section class="section-popular-content" id="popularContent">
                <div class="container">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            {{--<div class="section-popular-travel row justify-content-center">--}}

                                <div class="row pt-4 gx-4 gy-4">
                                    <div class="col-md-3">
                                        <div class="card" style="width: 15rem;">
                                            <img class="card-img-top" src="https://www.itrip.id/wp-content/uploads/2019/12/Tempat-Makan-Kediri.jpg" alt="...." />
                                            <div class="card-body">
                                              <h5 class="card-title">Bakso - Bu Lastri</h5>
                                              <p class="card-text">Bakso Jumbo, Bakso Bakar, Aneka Camilan</p>
                                                <div class="number">
                                                    <div class="medium infoitem"></div>
                                                    "4.6"                     1,2 km
                                            </div>
                                          </div>
                                    </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card" style="width: 15rem;">
                                            <img class="card-img-top" src="https://www.itrip.id/wp-content/uploads/2019/12/Tempat-Makan-Kediri.jpg" alt="...." />
                                            <div class="card-body">
                                              <h5 class="card-title">Nasi Goreng -  Skyline</h5>
                                              <p class="card-text">Aneka Nasi Goreng, Aneka Minuman</p>
                                              <div class="number">
                                                <div class="medium infoitem"></div>
                                                "4.6"                     1,2 km
                                        </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card" style="width: 15rem;">
                                            <img class="card-img-top" src="https://www.itrip.id/wp-content/uploads/2019/12/Tempat-Makan-Kediri.jpg" alt="...." />
                                            <div class="card-body">
                                              <h5 class="card-title">Ayam Bakar - Sabang</h5>
                                              <p class="card-text">Aneka Ayam, Minuman, Camilan</p>
                                              <div class="number">
                                                <div class="medium infoitem"></div>
                                                "4.6"                     1,2 km
                                        </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card" style="width: 15rem;">
                                            <img class="card-img-top" src="https://www.itrip.id/wp-content/uploads/2019/12/Tempat-Makan-Kediri.jpg" alt="...." />
                                            <div class="card-body">
                                              <h5 class="card-title">Mie Ayam - H.Mamat</h5>
                                              <p class="card-text">Mie Ayam Ceker, Bakso, Pangsit</p>
                                              <div class="number">
                                                <div class="medium infoitem"></div>
                                                "4.6"                     1,2 km
                                        </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>
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
