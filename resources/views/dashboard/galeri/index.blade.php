@extends('layouts.dashboard')
@section('layout_title', 'Galeri')
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
            <li class="breadcrumb-item active" aria-current="page">Daftar Galeri</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card bg-yellow-100 border-0 shadow">
            <div class="card-header">
                <div class="mb-3 mb-sm-0">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-flex">
                            <div class="fs-5 fw-normal justify-content-center align-self-center"><i class="fa-solid fa-image"></i> Daftar Galeri</div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <a href="{{ route('galeri.create') }}" class="btn btn-primary d-inline-flex align-items-center me-2 float-lg-end">
                                <i class="fas fa-add me-2"></i>
                                Tambah Galeri
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap w-100 mb-0 rounded yajra-datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start text-center">No</th>
                                <th class="border-0">Judul</th>
                                <th class="border-0">Gambar</th>
                                <th class="border-0 rounded-end no-sort">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('layout_script')
    <script>
        $(document).ready(function(){
            var table = $('.yajra-datatable').DataTable({
                scrollY:        true,
                scrollX:        true,
                scrollCollapse: true,
                fixedColumns:   {
                    left: 2,
                    right:1
                },              
                processing: true,
              serverSide: true,
              ajax: "{{ route('api.galeri') }}",
              columns: [
                  {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex', 
                    orderable: false,
                    searchable: false
                  },
                  {
                    data: 'judul',
                    name: 'judul',
                    "render": function ( data, type, full, meta ) { 
                        // return '<a href="/admin-page/pariwisata/'+ data[0] +'/edit" class="btn btn-sm btn-warning btn-edit me-2" data-id="'+ data[0] +'" data-nama="'+ data[1] +'"><i class="fas fa-pencil me-2"></i>Edit</a> <button class="btn btn-sm btn-danger btn-delete" data-id="'+ data[0] +'" data-nama="'+ data[1] +'"><i class="fas fa-trash me-2"></i>Hapus</button>'
                        var isi = data.substring(0, 20);
                        if (data.length>20) {
                            return isi+'....';
                            
                        } else {
                            return isi;
                        }
                    },
                  },
                  {
                    data: 'foto',
                    name:'foto',
                    orderable: false, 
                    searchable: false,
                    "render": function ( data, type, full, meta ) { 
                        // return '<a href="/admin-page/pariwisata/'+ data[0] +'/edit" class="btn btn-sm btn-warning btn-edit me-2" data-id="'+ data[0] +'" data-nama="'+ data[1] +'"><i class="fas fa-pencil me-2"></i>Edit</a> <button class="btn btn-sm btn-danger btn-delete" data-id="'+ data[0] +'" data-nama="'+ data[1] +'"><i class="fas fa-trash me-2"></i>Hapus</button>'
                        return '<img src="'+'../'+data+'" class="p-1" alt="gambar" height="75px">';
                    },
                  },
                  {
                    data: 'action', 
                    name: 'action', 
                    orderable: false, 
                    searchable: false,
                    "render": function ( data, type, row, meta ) { 
                        return '<a href="/admin-page/galeri/'+ data[0] +'/edit" class="btn btn-sm btn-warning btn-edit me-2" data-id="'+ data[0] +'" data-nama="'+ data[1] +'"><i class="fas fa-pencil me-2"></i>Edit</a> <button class="btn btn-sm btn-danger btn-delete" data-id="'+ data[0] +'" data-nama="'+ data[1] +'"><i class="fas fa-trash me-2"></i>Hapus</button>'
                    },
                  },
              ],
              columnDefs: [
                  {
                    "className": "dt-center",
                    "targets": [0,3]
                  }
              ]
          });
        });
    </script>
    <script>
        $(document).on('click', '.btn-delete', function (e) { 
            e.preventDefault();
            var nama = $(this).data('nama');
            var id = $(this).data('id');

            Swal.fire({
                icon: 'warning',
                title: 'Hapus '+nama+'?',
                text: 'Data yang terhapus tidak dapat dikembalikan.',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/admin-page/galeri/'+id,
                        type: 'DELETE',
                        dataType: 'html',
                        data: {method: '_DELETE', submit: true},

                        success: function(data) {
                            if (data == true) {
                                Swal.fire({
                                    title: 'Dihapus!',
                                    text: 'Galeri berhasil dihapus.',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            } else {
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: 'Galeri gagal dihapus.',
                                    icon: 'error',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        },
                        error: function(){
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Galeri gagal dihapus.',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }).always(function (data) {
                        $('.yajra-datatable').DataTable().draw(false);
                    });
                }
            })
        });
    </script>
@endsection