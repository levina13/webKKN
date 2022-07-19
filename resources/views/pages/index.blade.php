@extends('layouts.public')
@section('layout_title', 'Home')
@section('page_title', 'Wisata Sumber Banteng')
@section('layout_content')

		<div class="mt-6">
			<div class="row-fluid  d-flex justify-content-center mt-4">
				<div class="col-lg-6 col-sm-10 col-md-8">
					<iframe width="80%" height="300vh" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
					</iframe>
				</div>
			</div>
		</div>
	</header>

	<main>
		<section class="section-popular" id="popular">
			<div class="container">
				<div class="row">
					<div class="col text-center section-popular-heading">
					<h2>Wisata Terpopuler</h2>
					<p>Sesuatu yang belum Anda lihat sebelumnya di dunia</p>
                    <div class="row pt-4 gx-4 gy-4">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>
                    </div>
					</div>


				</div>
			</div>
		</section>

		<section class="section-popular-content" id="popularContent">
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
                    @foreach ($wisataPopulers as $wisata)
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ urlencode($wisata->gambar) }}')">
							<div class="travel-country">{{ $wisata->nama_kecamatan }}</div>
							<div class="travel-location">{{ $wisata->nama }}</div>
							<div class="travel-button mt-auto">
								<a href="{{ route('public.wisata', $wisata->id_objek_wisata) }}" class="btn btn-travel-details px-4">
									Detail Wisata
								</a>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</section>

		<section class="section-pupular-content " style="margin-top: 50px; padding-top:10px; padding-bottom:20px; background-color:#ffffff !important" id="popularContent">

			<div class="container" >
					<div class="card border-0 shadow">
						<div class="card-body">
							<div class="row">
								<div class="col text-start"><h4 style="font-family: 'Playfair Display', serif; font-weight: bold;" >Mungkin Anda tertarik</h4></div>
								<div class="col text-end"><h5 style="text-align: right"><a href="{{route('public.list_wisata')}}">Lihat semua>></a></h5></div>

							</div>
							<div class="row row-cols-md-3 row-cols-2 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5 g-4 mt-3" style="min-height: 180px;">
								@foreach ($wisataPilihans as $wisata)
									<div class="col-sm-4 col-md-3 col-lg-2 highlight-item onpagination-load gambarrr">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="{{ urlencode($wisata->gambar) }}" class=" bg-img w-100 h-100 object-fit-cover position-absolute top-0 hover-zoom" alt="{{ $wisata->nama }}">
											<div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div>
										</a>
									</div>
								@endforeach
							</div>
						</div>

					</div>
			</div>
		</section>



		<section class="section-testimonial-heading" id="testimonialHeading">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2>Ulasan</h2>
						<p>
							Pengalaman terbaik mereka menggunakan Holiyou
							<h5 style="text-align: right"><a href="{{route('ulasan.index')}}">Lihat semua>></a></h5></div>
						</p>
					</div>
				</div>

			</div>
		</section>

		<section class="section section-testimonial-content" id="testimonialContent">
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
					@foreach ($ulasans as $ulasan)
						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="card card-testimonial text-center">
								<div class="testiominal-content">
									<img src="https://i.pravatar.cc/300" alt="User" class="mb-4 rounded-circle" />
									<h3 class="mb-4">{{$ulasan->nama_pengguna}}</h3>
									{{-- <p class="testimonial"> --}}
										{!! $ulasan->ulasan !!}
									{{-- </p> --}}

									{{-- <img src={{}} alt=""> --}}
								</div>
								<hr />
								<a href="{{ route('public.wisata', $ulasan->id_objek_wisata) }}">
									<p class="trip-to mt-2">{{$ulasan->nama_pariwisata}}</p>
								</a>
							</div>
						</div>
					@endforeach



				</div>
			</div>
		</section>

		<section class="section-testimonial-heading mb-0" id="testimonialHeading">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2>Peta Menuju Lokasi</h2>

					</div>
				</div>
			</div>
		</section>
		<section class="section section-testimonial-content" id="testimonialContent" style="margin-top: -420px">
					<div class="mt-4 mb-4 text-center">

						<div class="row-fluid d-flex justify-content-center">
							<div class="col-lg-6 col-sm-10 col-md-8">
								<iframe width="80%" height="300vh"  id="gmap_canvas" src="https://maps.google.com/maps?q=Sumber%20Banteng,%20Tempurejo,%20Kec.%20Pesantren,%20Kabupaten%20Kediri,%20Jawa%20Timur%2064138&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="2" scrolling="no" marginheight="0" marginwidth="0">
								</iframe>
							</div>
						</div>
					</div>
		</section>

	</main>
@endsection
