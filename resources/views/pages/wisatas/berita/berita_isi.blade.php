@extends('layouts.public')
@section('layout_title', $berita->judul )
@section('page_title', $berita->judul)
@section('layout_content')
		{{-- <a href="{{ route('public.list_wisata') }}" class="btn btn-get-started px-4 mt-4"> --}}
			{{-- Destinasi Wisata --}}
		{{-- </a> --}}
	</header>
<main>


    <style>
        .file-field input[type=file] {
        max-width: 230px;
        position: absolute;
        cursor: pointer;
        opacity: 0;
        padding-bottom: 30px;
        }
        .avatar-xl{
            width: 20rem;

        }
        .img{
            max-width: 100%;
        }
    </style>
        <section class="section-details-header details-page-header pt-2 pb-2" style="min-height: 0 !important">
            <div class="container">
                <div class="row mb-4  justify-content-center">
                    <div class="col-11">
                        <div class="card" style="">
                            <img class="card-img-top" src="{{ urlencode('../'.$berita->foto) }}" alt="...." />
                            <div class="card-body">
                            <p class="card-text">{!!substr($berita->isi)!!}</p>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>

        </section>
            {{-- <section class="section-details-content details-page-content" style="margin-bottom: 30px"> --}}
            {{-- </section> --}}
</main>  
@endsection
