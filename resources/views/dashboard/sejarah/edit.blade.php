@extends('layouts.dashboard')
@section('layout_title', 'Edit Sejarah')
@section('layout_content')
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('index') }}">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('admin-page') }}">Admin</a></li>
            <li class="breadcrumb-item">Sejarah</li>
            <li class="breadcrumb-item active" aria-current="page">Sejarah {{ $sejarah->id_sejarah }}</li>
        </ol>
    </nav>
</div>
<form action="{{ route('sejarah.update', $sejarah->id_sejarah) }}" method="POST" enctype='multipart/form-data'>
    @method('PATCH')
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="row">
      <div class="col-12 mb-4">
          <div class="card bg-yellow-100 border-0 shadow">
              <div class="card-header">
                  <div class="mb-3 mb-sm-0">
                      <div class="row">
                          <div class="col-12 col-lg-6 d-flex">
                              <div class="fs-5 fw-normal justify-content-center align-self-center"><i class="fa-solid fa-book"></i>Sejarah {{ $sejarah->id_sejarah }}</div>
                          </div>
                          <div class="col-12 col-lg-6">
                              <button type="submit" class="btn btn-primary d-inline-flex align-items-center me-2 float-lg-end">
                                  <i class="fas fa-save me-2"></i>
                                  Simpan
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-12 col-xl-4">
          <div class="row">
              <div class="col-12">
                  <div class="card card-body border-0 shadow mb-4">
                      <h2 class="h5 mb-4">Gambar</h2>
                      <div class="d-flex align-items-center">
                          <div class="me-3">
                            <img class="rounded avatar-xl gambar-preview" src="/{{ old('foto', $sejarah->foto) }}" alt="change" id="gambar-preview" />
                          </div>
                          <div class="file-field">
                              <div class="d-flex justify-content-xl-center ms-xl-3">
                                  <div class="d-flex">
                                    <svg class="icon text-gray-500 me-2" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <input type="file" id="gambar" name="foto" accept="image/png, image/jpeg" onchange="document.getElementById('gambar-preview').src = window.URL.createObjectURL(this.files[0])"  >
                                    <div class="d-md-block text-left">
                                        <div class="fw-normal text-dark mb-1">Pilih Gambar Baru</div>
                                        <div class="text-gray small">JPG atau PNG. Maksimal 1MB</div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @error('foto')
                      <p class=" mt-1 text text-danger">{{ $message }}</p>
                      @enderror
                  </div>
              </div>
          </div>
      </div>
      <div class="col-12 col-xl-8">
          <div class="card card-body border-0 shadow mb-4">
              <div class="row">
                  <h2 class="h5 mb-4">Isi</h2>
                  <div class="form-group">
                      <textarea id="my-editor" name="isi" class="form-control">{{  old('isi', $sejarah->isi)  }}</textarea>
                  </div>
              </div>
          </div>
      </div>
  </div>
</form>
@endsection
