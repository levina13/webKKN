<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>@yield('layout_title') | {{ config('app.name') }}</title>
	<link rel="icon" type="image/png" sizes="32x32" href="/images/wisata/kkn.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/wisata/kkn.png">
	<link rel="stylesheet" href="/frontend/libraries/bootstrap/css/bootstrap.css" />
	<link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="/frontend/styles/main.css" />
	<link rel="stylesheet" href="/frontend/libraries/fontawesome/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link type="text/css" href="/vendor/leaflet/leaflet.css" rel="stylesheet">
    <!-- Data Tables -->
    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
	<div class="container sticky-top">
		<nav class="row navbar navbar-expand-lg navbar-light bg-white">
			<a href="{{ route('index') }}" class="navbar-brand">
				<img src="{{ asset('/assets/img/brand/kkn.png') }}" alt=" " />
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navb" style="float: right">
				<ul class="navbar-nav ml-auto mr-4" >
					<li class="nav-item text-center {{(request()->routeIs('index'))?'active':''}} font-weight-bold">
						<a href="{{ route('index') }}" class="nav-link ">Home</a>
					</li>
					<li class="nav-item text-center {{(request()->routeIs('sejarah'))?'active':''}} font-weight-bold">
						<a href="{{ route('public.sejarah') }}" class="nav-link ">Sejarah</a>
					</li>
					<li class="nav-item text-center {{(request()->routeIs('kuliner'))?'active':''}} font-weight-bold">
						<a href="{{ route('public.kuliner') }}" class="nav-link ">Kuliner</a>
					</li>
					<li class="nav-item text-center {{(request()->routeIs('listBerita'))?'active':''}} font-weight-bold">
						<a href="{{ route('public.listBerita') }}" class="nav-link ">Berita</a>
					</li>
					<li class="nav-item text-center {{(request()->routeIs('galeri'))?'active':''}} font-weight-bold">
						<a href="{{ route('public.galeri') }}" class="nav-link ">Galeri</a>
					</li>
				</ul>
				<!-- Mobile Button -->
				<form class="form-inline d-block d-md-none">
					<!-- <a href="#" data-toggle="dropdown" class="btn btn-login my-2 my-sm-0" type="button">
						Hi, User!
					</a> -->

					@if (Auth::check())
						<li class="nav-item dropdown btn btn-login w-100 my-2 my-sm-0 d-flex">
							<button href="#" class="nav-link dropdown-toggle btn btn-login btn-block text-center align-content-center justify-content-center" id="navbardrop" data-toggle="dropdown">
								Hi, {{ Auth::user()->name }}!
							</button>
							<div class="dropdown-menu w-100">
								@if (Auth::user()->is_admin)
								<a href="{{ route('admin-page') }}" class="dropdown-item"><i class="fas fa-user-cog mr-2"></i> Dashboard</a>
								@endif
								<a href="{{ route('logout') }}" role="button" type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
							</div>
						</li>
=					@endif

				</form>

				<!-- Desktop Button -->
				<form class="form-inline my-2 my-lg-0 d-none d-md-block float-right">
					@if (Auth::check())
					<li class="nav-item dropdown btn btn-login btn-navbar-right d-flex">
						<button href="#" class="nav-link dropdown-toggle btn btn-login" id="navbardrop" data-toggle="dropdown">
							Hi, {{ Auth::user()->name }}!
						</button>
						<div class="dropdown-menu">
							@if (Auth::user()->is_admin)
							<a href="{{ route('admin-page') }}" class="dropdown-item"><i class="fas fa-user-cog mr-2"></i> Dashboard</a>
							@endif
							<a href="{{ route('logout') }}" role="button" type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
						</div>
					</li>
					@endif
				</form>
			</div>
		</nav>
	</div>
    <!-- Header -->
	<header class="text-center">
		<h1 style="-webkit-text-stroke: 1px black;">
			@yield('page_title')
		</h1>

	@yield('layout_content')


 

	<footer class="text-center text-lg-start bg-dark text-white">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-2 mt-1 border-bottom"
  >
    <!-- Left -->
    <div class="">
      <span>Get connected with us on social networks:</span>

      <a target="_blank" href="https://www.instagram.com/official_sumberbanteng/" class="me-1 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a target="_blank" href="https://vt.tiktok.com/ZSR8PsAfC/" class="me-1 text-reset">
        <i class="fab fa-tiktok"></i>
      </a>
      <a target="_blank" href="https://youtube.com/channel/UCHT54kTXVf4LdhGfiTJ_hMw" class="me-1 text-reset">
        <i class="fab fa-youtube"></i>
      </a>
      <a target="_blank" href="sumberbantheng@gmail.com" class="me-1 text-reset">
        <i class="fab fa-google"></i>
      </a>
    </div>
    <!-- Left -->

    <!-- Right -->
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <!-- Grid column -->

        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          </h6>
          <p><i class="fab fa-instagram me-2"></i> official_sumberbanteng</p>
          <p><i class="fab fa-tiktok me-2"></i> official_sumberbanteng</p>
          <p><i class="fab fa-youtube me-2"></i> Official Sumber Banteng</p>
          <p>
            <i class="fas fa-envelope me-2"></i>
            sumberbantheng@gmail.com
          </p>

        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Wisata Sumber Banteng</a>
  </div>
  <!-- Copyright -->
</footer>

	    <!-- Core -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>


    <!-- Sweet Alerts 2 -->
    <script src="/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset("frontend/libraries/jquery/jquery-3.4.1.min.js") }}"></script>
	<script src="{{ asset("frontend/libraries/bootstrap/js/bootstrap.js") }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.8.0-beta.1/leaflet.js" integrity="sha512-35Se9CS+xsRdx551wuOxxQrJi/ZpmMn6CKYXALlsLCCH4y24H7YUrhFxPBO72Un8E3fXl8miMlZreP6/Vxr5mQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
     <!-- Data Tables -->
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="text/javascript"></script>

	<!-- CKEditor -->
	<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        };
    </script>
    <script>
        CKEDITOR.replace('my-editor', options);
    </script>

  @yield('layout_script')
</body>
</html>
