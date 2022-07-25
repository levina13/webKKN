@extends('layouts.public')
@section('layout_title', 'Home')
@section('page_title', 'Wisata Sumber Banteng')
@section('layout_content')

		<div class="mt-6">
			<div class="row-fluid  d-flex justify-content-center mt-4">
				<div class="col-lg-6 col-sm-10 col-md-8">
					{{-- <iframe width="80%" height="300vh" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
					</iframe> --}}
				</div>
			</div>
		</div>
	</header>

	<main style="margin-bottom: 40px">
		<section class="section-popular" id="popular">
			<div class="container">
				<div class="row">
					<div class="col text-center section-popular-heading">
					<h2>Sejarah Singkat Wisata Sumber Banteng</h2>
					</div>


				</div>
			</div>
		</section>

		<section class="section-popular-content" id="popularContent">
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
			<div class="container" >
				@if(!empty($sejarah))
				<div class="card border-0 shadow">
					<div class="card-body">
						<div class="row row-cols-md-3 row-cols-2 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5 g-4 mt-3" style="min-height: 180px;">
							<div class="col-lg-5">
								<div class="image-container">
									<img class="img-fluid" src="{{urlencode($sejarah->foto)}}" alt="alternative">
								</div> <!-- end of image-container -->
							</div> <!-- end of col -->
							<div class="col-lg-5">
								<div class="text-container">
								@php
									$posSejarah = strpos($sejarah->isi, '.');
									$posSejarah = strpos ($sejarah->isi, '.', $posSejarah+1); //find second dot using offset
								@endphp

									{!!substr($sejarah->isi, 0, $posSejarah)!!}.....<a href="{{route('public.sejarah')}}">Baca Selengkapnya>></a></p>
								</div> <!-- end of text-container -->
							</div> <!-- end of col -->

							
						</div>

					</div>

				</div>
				@endif
			</div>
				</div>
			</div>
		</section>

		<section class="section-pupular-content " style="margin-top: 50px; padding-top:10px; padding-bottom:20px; background-color:#ffffff !important" id="popularContent">

		</section>

		<section class="section-testimonial-heading" id="testimonialHeading">
			<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2>Kuliner</h2>
								<p>
									Lihat Kuliner Apa Saja Yang Ada di Wisata Sumber Banteng
								</p>
							</div>
						</div>
			</div>
		</section>

		<section class="section section-testimonial-content" id="testimonialContent" style=" margin-top: -400px !important;">
			<div class="container">
				<div class="row pt-4 gx-4 gy-4 d-flex justify-content-center">
					@foreach ($kuliners as $kuliner)
						<div class="col-md-3 col-6 col-sm-5 mb-4">
							<div class="card" style="height: 100%">
								<img class="card-img-top p-2" style="max-height: 150px" src="{{ urlencode($kuliner->foto) }}" alt="gambar" />
								<div class="card-body" >
									<h5 class="card-title">{{$kuliner->nama}}</h5>
									<p class="card-text">{!! $kuliner->deskripsi !!}</p>
								</div>
							</div>
						</div>
					@endforeach

				</div>
				<div class="row p-0 text-right d-flex justify-content-end">
					<div class="col text-right"><h5 style="text-align: right"><a href="{{route('public.kuliner')}}">Lihat semua>></a></h5></div>
				</div>

							
						
			</div>
		</section>
		
		{{-- BERITA --}}
		<section class="section-testimonial-heading mb-0" id="testimonialHeading">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2>Berita</h2>
						<p>
							Lihat Ada Apa Saja Yang Ada di Wisata Sumber Banteng
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="section section-testimonial-content" id="testimonialContent" style="margin-top: -380px">
			<div class="container">

				<div class="row mt-4 mb-4  justify-content-center">
					@foreach($beritas as $berita)
						<div class="col-lg-6 col-sm-10 col-md-8 mb-2">
							<div class="card" style="height:100%">
								@php
									$posberita = strpos($berita->isi, '.');
								@endphp
								<div class="card-body">
									<div class="row justify-content-center">
										<h5 class="card-title">{{$berita->judul}}</h5>
									</div>
									<div class="row justify-content-center">
										<div class="col-4">
											<img class="img-fluid" style="" src="{{ urlencode($berita->foto) }}" alt="gambar berita" />
										</div>
										<div class="col-8 card-body">
											<p class="card-text">{!!substr($berita->isi, 0, $posberita)!!}.....</p>
											<a href="{{ route('public.isiBerita', $berita->id_berita) }}" class="btn btn-primary">Full Story</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					@endforeach

				</div>
				<div class="row p-0 text-right d-flex justify-content-end">
					<div class="col text-right"><h5 style="text-align: right"><a href="{{route('public.listBerita')}}">Lihat semua>></a></h5></div>
				</div>

			</div>
		</section>

		{{-- GALERI --}}
		
		<section class="section-pupular-content " style="margin-top: 50px; padding-top:10px; padding-bottom:20px; background-color:#ffffff !important" id="popularContent">
			<div class="container" >
					<div class="card border-0 shadow">
						<div class="card-body">
							<div class="row p-0">
								<div class="col text-center"><h2 style="font-family: 'Playfair Display', serif; font-weight: bold;" >Galeri</h2></div>
							</div>
							<div class="row justify-content-center mt-3" style="min-height: 180px;">
								@foreach($galeris as $galeri)                                    
									<div class="col-md-3 col-5 col-sm-4 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column">
											<img src="{{ urlencode($galeri->foto) }}" alt="{{$galeri->judul}}"class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" >
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>
								@endforeach
									
							</div>
							<div class="row p-0 text-right d-flex justify-content-end">
								<div class="col text-right"><h5 style="text-align: right"><a href="{{route('public.galeri')}}">Lihat semua>></a></h5></div>
							</div>

						</div>

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
		<section class="section section-testimonial-content p-0" id="testimonialContent" style="margin-top: -420px">
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
