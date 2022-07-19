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

    <section class="section-popular main-section" id="popular" style="margin-bottom: -50px !important;">
        <div class="container">
            <section class="section-popular-content" id="popularContent">
                <div class="container">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row pt-4 gx-4 gy-4">
                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="https://cdn.antaranews.com/cache/730x487/2019/07/21/Wisata-Sumber-Banteng-Kediri-210719-pf-6.jpg" alt="...." />
                                    <div class="card-body">
                                      <h5 class="card-title">Wisata Sumber Banteng Dipadati Pengunjung</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-primary">Full Story</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="https://cdn.antaranews.com/cache/730x487/2019/07/21/Wisata-Sumber-Banteng-Kediri-210719-pf-6.jpg" alt="...." />
                                    <div class="card-body">
                                      <h5 class="card-title">Ini Dia Tempat Wisata Daerah Tempurejo Kediri</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-primary">Full Story</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="https://cdn.antaranews.com/cache/730x487/2019/07/21/Wisata-Sumber-Banteng-Kediri-210719-pf-6.jpg" alt="...." />
                                    <div class="card-body">
                                      <h5 class="card-title">Ini Dia Tempat Wisata Daerah Tempurejo Kediri</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-primary">Full Story</a>
                                    </div>
                                  </div>
                            </div>
                            </div>
                            {{--<div class="wrapper row3">
                                <section class="hoc container clear">
                                  <!-- ################################################################################################ -->
                                  <div class="sectiontitle">
                                    <h6 class="heading">Ultrices erat ex aliquam</h6>
                                    <p>Nunc non tempus risus quam ut urna duis tristique commodo</p>
                                  </div>
                                  <div class="group">
                                    <article class="one_third first"><a href="#"><img class="btmspace-30" src="images/wisata/sb.jpg" alt="" style="width: 18rem;"></a>
                                      <h3 class="nospace heading font-x1">Est at ullamcorper nam</h3>
                                      <ul class="nospace meta">
                                        <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                                        <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>
                                      </ul>
                                      <p>Posuere ipsum eget tellus placerat quis ultrices sem commodo interdum et malesuada fames ipsum primis faucibus&hellip;</p>
                                      <footer class="nospace"><a class="btn" href="#">Full Story &raquo;</a></footer>
                                    </article>
                                    <article class="one_third"><a href="#"><img class="btmspace-30" src="images/wisata/sb.jpg" alt="" style="width: 18rem;"></a>
                                      <h3 class="nospace heading font-x1">Curabitur ut dui eros</h3>
                                      <ul class="nospace meta">
                                        <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                                        <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>
                                      </ul>
                                      <p>Ut ut erat augue cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus duis pulvinar&hellip;</p>
                                      <footer class="nospace"><a class="btn" href="#">Full Story &raquo;</a></footer>
                                    </article>
                                    <article class="one_third"><a href="#"><img class="btmspace-30" src="images/wisata/sb.jpg" alt="" style="width: 18rem;"></a>
                                      <h3 class="nospace heading font-x1">Porttitor sollicitudin</h3>
                                      <ul class="nospace meta">
                                        <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                                        <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>
                                      </ul>
                                      <p>Suspendisse congue sem quis eros accumsan eget mattis massa vulputate phasellus efficitur libero elit nec tincidunt&hellip;</p>
                                      <footer class="nospace"><a class="btn" href="#">Full Story &raquo;</a></footer>
                                    </article>
                                  </div>
                                  <!-- ################################################################################################ -->
                                </section>
                              </div>
                              </div>
                           {{-- <div class="section-popular-travel row justify-content-center">--}}
                                {{--<h3 class="title">
                                    <span>#Berita Terbaru Seputar Wisata Sumber Banteng</span>
                                </h3>
                                <div class="latest_wrap">
                                    <div class="latest_item">
                                        <div class="latest_img">
                                            <a href="https://www.koranmemo.com/daerah/pr-1923350503/jadi-favorit-saat-libur-lebaran-wisata-ironggolo-dipadati-pengunjung">
                                            <img src="https://assets.promediateknologi.com/crop/0x0:0x0/188x113/photo/2022/05/06/914374019.jpg" alt="Jadi Favorit Saat Libur Lebaran, Wisata Ironggolo Dipadati Pengunjung" alt="Jadi Favorit saat liburan lebaran">
                                            </a>
                                        </div>
                                        <div class="latest_right">
                                            <h4 class="latest_subtitle">...</h4>
                                            <h2 class="latest_title">....</h2>
                                            <date class="latest_date">Jumat, 6 Juni 2022 | 12:10 WIB
                                            </date>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="row pt-4 gx-4 gy-4">
                                    <div class="col-md-4">
                                        <div class="card" style="height: 18rem;">
                                            <img class="card-img-top" src="https://cdn.antaranews.com/cache/730x487/2019/07/21/Wisata-Sumber-Banteng-Kediri-210719-pf-6.jpg" alt="...." />
                                            <div class="card-body">
                                              This is some text within a card body.
                                            </div>
                                          </div>
                                          </div>
                                    </div>}--}}
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
