@extends('layouts.dashboard')
@section('layout_title', 'Daftar Pengguna')
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
                <li class="breadcrumb-item active" aria-current="page">Daftar Pengguna</li>
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
                                <div class="fs-5 fw-normal justify-content-center align-self-center"><i class="fas fa-user"></i> Daftar Pengguna</div>
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
                        <table class="table table-centered table-nowrap mb-0 rounded yajra-datatable w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('layout_script')
    <script>
        $(function () {
          
          var table = $('.yajra-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('api.user') }}",
              columns: [
                  {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex', 
                    orderable: false,
                    searchable: false,
                    "width": "10%",
                  },
                  {
                    data: 'name',
                    name: 'name'
                  },
                  {
                    data:'is_admin',
                    name:'is_admin',
                    "render":function(data, type, full, meta){
                        if (data==1) {
                            return '<button type="button" class="btn btn-info btn-sm" disabled>Admin</button>';
                        }else{
                            return '<button type="button" class="btn btn-warning btn-sm" disabled>Non Admin</button>';
                        }
                    },
                  },
                  {
                    data:'action',
                    name:'action',
                    "render":function(data, type, full, meta){
                        var button="";
                        if (data[0]==1) {
                            button = " disabled";
                        }
                        if (data[2]==1) {
                            return '<button type="button" class="btn btn-danger btn-sm btn-ubah-nonadmin'+button+'" data-id="'+data[0]+'" data-nama="'+data[1]+'"data-admin="'+data[2]+'">Ubah Non Admin</button>';
                        }else{
                            return '<button type="button" class="btn btn-success btn-sm btn-ubah-admin'+button+'" data-id="'+data[0]+'" data-nama="'+data[1]+'"data-admin="'+data[2]+'">Ubah Admin</button>';
                        }
                    },
                  },
              ]
          });
          
        });
    </script>
    <script>
        $(document).on('click', '.btn-ubah-nonadmin', function (e) {
            e.preventDefault();
            var nama = $(this).data('nama');
            var id = $(this).data('id');
            var status = $(this).data('admin');
            var title = 'Apakah anda yakin '+nama+' akan menjadi NON-Admin?';
            var text = nama+' akan berhenti menjadi admin.'

            Swal.fire({
                icon: 'warning',
                title: title,
                text: text,
                showCancelButton: true,
                confirmButtonText: 'Ubah Status',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/admin-page/user/'+id,
                        type: 'PATCH',
                        dataType: 'json',
                        data: {method: '_PATCH', id_user: id, status:status},

                        success: function(data) {
                            if (data == true) {
                                Swal.fire({
                                    title: 'Status Berubah!',
                                    text: 'Status berhasil diubah.',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            } else {
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: 'Status gagal diubah.',
                                    icon: 'error',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        },
                        error: function(){
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Status gagal diubah.',
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
        $(document).on('click', '.btn-ubah-admin', function (e) { 
            e.preventDefault();
            var nama = $(this).data('nama');
            var id = $(this).data('id');
            var status = $(this).data('admin');
            var title = 'Apakah anda yakin '+nama+' akan menjadi Admin?';
            var text = nama+' akan menjadi admin.';

            Swal.fire({
                icon: 'warning',
                title: title,
                text: text,
                showCancelButton: true,
                confirmButtonText: 'Ubah Status',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/admin-page/user/'+id,
                        type: 'PATCH',
                        dataType: 'json',
                        data: {method: '_PATCH', id_user: id, status:status},

                        success: function(data) {
                            if (data == true) {
                                Swal.fire({
                                    title: 'Status Berubah!',
                                    text: 'Status berhasil diubah.',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            } else {
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: 'Status gagal diubah.',
                                    icon: 'error',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        },
                        error: function(){
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Status gagal diubah.',
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
