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
					<div class="card border-0 shadow">
						<div class="card-body">
							<div class="row row-cols-md-3 row-cols-2 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5 g-4 mt-3" style="min-height: 180px;">
								<div class="col-lg-7">
									<div class="image-container">
										<img class="img-fluid" src="images/wisata/sb.jpg" alt="alternative">
									</div> <!-- end of image-container -->
								</div> <!-- end of col -->
								<div class="col-lg-5">
									<div class="text-container">
										<p>Wisata Sumber Banteng berada di pinggiran Kota Kediri. Tepatnya berada di Kelurahan Tempurejo, Kecamatan Pesantren, Kota Kediri.
											Mulai dikelola menjadi tempat wisata berawal dari kepedulian komunitas kepada lingkungan sekitar.
											Pada tahun 2014 Pemerintah Daerah masih melakukan pemetaan tempat wisata yang berada di lingkup area Kota Kediri. Salah satunya area Wisata Sumber Banteng.
											Debit air sumber banteng saat.....<a href="{{route('public.sejarah')}}">Baca Selengkapnya>></a></p>
									</div> <!-- end of text-container -->
								</div> <!-- end of col -->

								
								{{-- @foreach ($wisataPilihans as $wisata)
									<div class="col-sm-4 col-md-3 col-lg-2 highlight-item onpagination-load gambarrr">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="{{ urlencode($wisata->gambar) }}" class=" bg-img w-100 h-100 object-fit-cover position-absolute top-0 hover-zoom" alt="{{ $wisata->nama }}">
											<div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div>
										</a>
									</div>
								@endforeach --}}
							</div>

						</div>

					</div>
			</div>
					@foreach ($wisataPopulers as $wisata)
                    @endforeach
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
					<div class="col-md-3 col-6 col-sm-5 mb-4">
						<div class="card" ">
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

					<div class="col-md-3 col-6 col-sm-5 mb-4">
						<div class="card" ">
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

					<div class="col-md-3 col-6 col-sm-5 mb-4">
						<div class="card" style="">
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

					<div class="col-md-3 col-6 col-sm-5 mb-4">
						<div class="card" >
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
				<div class="row p-0 text-right d-flex justify-content-end">
					<div class="col text-right"><h5 style="text-align: right"><a href="{{route('public.kuliner')}}">Lihat semua>></a></h5></div>
				</div>

							
							
							{{-- @foreach ($ulasans as $ulasan)
								<div class="col-sm-6 col-md-6 col-lg-4">
									<div class="card card-testimonial text-center">
										<div class="testiominal-content">
											<img src="https://i.pravatar.cc/300" alt="User" class="mb-4 rounded-circle" />
											<h3 class="mb-4">{{$ulasan->nama_pengguna}}</h3>
												{!! $ulasan->ulasan !!}
		
										</div>
										<hr />
										<a href="{{ route('public.wisata', $ulasan->id_objek_wisata) }}">
											<p class="trip-to mt-2">{{$ulasan->nama_pariwisata}}</p>
										</a>
									</div>
								</div>
							@endforeach --}}

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
		<section class="section section-testimonial-content" id="testimonialContent" style="margin-top: -420px">
			<div class="container">

				<div class="row mt-4 mb-4  justify-content-center">
					<div class="col-lg-6 col-sm-10 col-md-8">
						<div class="card" style="">
							<img class="card-img-top" src="https://cdn.antaranews.com/cache/730x487/2019/07/21/Wisata-Sumber-Banteng-Kediri-210719-pf-6.jpg" alt="...." />
							<div class="card-body">
							<h5 class="card-title">Wisata Sumber Banteng Dipadati Pengunjung</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Full Story</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-sm-10 col-md-8">
						<div class="card" style="">
							<img class="card-img-top" src="https://cdn.antaranews.com/cache/730x487/2019/07/21/Wisata-Sumber-Banteng-Kediri-210719-pf-6.jpg" alt="...." />
							<div class="card-body">
								<h5 class="card-title">Ini Dia Tempat Wisata Daerah Tempurejo Kediri</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Full Story</a>
							</div>
						</div>
					</div>
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
							
								{{-- @foreach ($wisataPilihans as $wisata) --}}
									<div class="col-md-3 col-6 col-sm-5 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="images/wisata/sb.jpg" class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" alt="{{ $wisata->nama }}">
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>
									<div class="col-md-3 col-6 col-sm-5 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="images/wisata/sb.jpg" class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" alt="{{ $wisata->nama }}">
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>
									<div class="col-md-3 col-6 col-sm-5 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="images/wisata/sb.jpg" class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" alt="{{ $wisata->nama }}">
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>
									<div class="col-md-3 col-6 col-sm-5 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="images/wisata/sb.jpg" class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" alt="{{ $wisata->nama }}">
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>
									<div class="col-md-3 col-6 col-sm-5 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="images/wisata/sb.jpg" class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" alt="{{ $wisata->nama }}">
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>
									<div class="col-md-3 col-6 col-sm-5 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="images/wisata/sb.jpg" class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" alt="{{ $wisata->nama }}">
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>
									<div class="col-md-3 col-6 col-sm-5 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="images/wisata/sb.jpg" class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" alt="{{ $wisata->nama }}">
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>
									<div class="col-md-3 col-6 col-sm-5 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="images/wisata/sb.jpg" class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" alt="{{ $wisata->nama }}">
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>
									<div class="col-md-3 col-6 col-sm-5 m-0 highlight-item onpagination-load gambarrr m-1 p-0">
										<a style="--bs-aspect-ratio: 125%" class="gambarzoom d-block rounded-3 overflow-hidden flex-column" href="{{ route('public.wisata', $wisata->id_objek_wisata) }}">
											<img src="images/wisata/sb.jpg" class=" bg-img w-100 h-100 object-fit-cover top-0 hover-zoom" alt="{{ $wisata->nama }}">
											{{-- <div class="overlay-text top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
												<h6 class="text-white  pb-2 mb-4">{{ $wisata->nama }}</h6>
											</div> --}}
										</a>
									</div>

									{{-- @endforeach --}}
									
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
