<!doctype html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Dashboard Guru</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- App favicon -->
	<link rel="shortcut icon" href="/assets/images/favicon-cendekia.jpg">
	<!-- Bootstrap Css -->
	<link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<!-- App Css-->
	<link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	@yield('head')
</head>

<body>
	<!-- <body data-layout="horizontal" data-topbar="colored"> -->
	<!-- Begin page -->
	<div id="layout-wrapper">
		<header id="page-topbar">
			<div class="navbar-header">
				<div class="d-flex">
					<!-- LOGO -->
					<div class="navbar-brand-box">
						<a href="/" class="logo">
                        <span class="logo-sm">
                            <img src="/assets/images/logo-cendekia.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/assets/images/logo-cendekia.png" alt="" height="20">
                        </span> </a>
					</div>
					<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"> <i class="fa fa-fw fa-bars"></i> </button>
					<!-- App Search-->
					<form class="app-search d-none d-lg-block">
						<div class="position-relative">
							<input type="text" class="form-control" placeholder="Search..."> <span class="uil-search"></span>
						</div>
					</form>
				</div>
				<div class="d-flex">
					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-9.jpg" alt="Header Avatar"> <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"> {{ auth()->user()->name }} </span> </button>
						<div class="dropdown-menu dropdown-menu-end">
							<!-- item-->
							<a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> <span class="align-middle">View Profile</span></a>
							<form action="/logout" method="post">
								@csrf
								<button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- ========== Left Sidebar Start ========== -->
		<div class="vertical-menu">
			<!-- LOGO -->
			<div class="navbar-brand-box">
				<a href="/" class="logo"> <span class="logo-sm">
                            <img src="/assets/images/logo-cendekia.png" alt="" height="22">
                        </span> <span class="logo-lg">
                            <img src="/assets/images/logo-cendekia.png" alt="" height="20">
                        </span> </a>
			</div>
			<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"> <i class="fa fa-fw fa-bars"></i> </button>
			<div data-simplebar class="sidebar-menu-scroll">
				<!--- Sidemenu -->
				<div id="sidebar-menu">
					<!-- Left Menu Start -->
					<ul class="metismenu list-unstyled" id="side-menu">
						<li class="menu-title">Menu</li>
						<li>
							<a href="/dashboard"> <i class="bi bi-house-door"></i> <span class="badge rounded-pill bg-primary float-end">01</span> <span>Dashboard</span> </a>
						</li>
						{{-- Halaman Guru --}}
						@if (auth()->user()->role == "admin" || auth()->user()->role == "guru")
							<li class="menu-title">Student Weekly Report</li>
							<li>
								<a href="{{ route('isianmurabbi') }}"> <i class="bi bi-table"></i> <span>Form Rapor Siswa</span> </a>
							</li>
							<li>
								<a href="{{ route('unduhrapor') }}"> <i class="bi bi-download"></i> <span>Unduh Laporan</span> </a>
							</li>
						@endif
						{{-- end of Halaman Guru --}}

						{{-- Halaman Siswa --}}
						@if (auth()->user()->role == "admin" || auth()->user()->role == "siswa")
							<li class="menu-title">Mutabaah Yaumiyah</li>
							<li>
								<a href="{{ route('mutabaah') }}"> <i class="bi bi-table"></i> <span>Form Mutabaah</span> </a>
							</li>
						@endif
						{{-- <li>
							<a href="#"> <i class="bi bi-download"></i> <span>Unduh Laporan</span> </a>
						</li> --}}
						{{-- end of Halaman Siswa --}}
					</ul>
				</div>
				<!-- Sidebar -->
			</div>
		</div>
		<!-- Left Sidebar End -->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="main-content">
			<div class="page-content">
				<div class="container-fluid">
					<!-- start page title -->
					
                    @yield('body')
					
				</div>
				<!-- container-fluid -->
			</div>
			<!-- End Page-content -->
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<script>
							document.write(new Date().getFullYear())
							</script> © Cendekia Muda </div>
						<div class="col-sm-6">
							<div class="text-sm-end d-none d-sm-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://cendekiamuda.sch.id/" target="_blank" class="text-reset">Divisi Pengabdi</a> </div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- end main content-->
	</div>
	<!-- END layout-wrapper -->

	<!-- JAVASCRIPT -->
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="/assets/libs/jquery/jquery.min.js"></script>
	<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="/assets/libs/simplebar/simplebar.min.js"></script>
	<script src="/assets/libs/node-waves/waves.min.js"></script>
	<script src="/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
	<!-- App js -->
	<script src="/assets/js/app.js"></script>

</body>

</html>