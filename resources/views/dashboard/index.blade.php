@extends('layouts.main')

@section('body')
	
	<!-- start page title -->
	<div class="row">
		<div class="col-12">
			<div class="page-title-box d-flex align-items-center justify-content-between">
				<h4 class="mb-0">Dashboard</h4>
				<div class="page-title-right">
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- end page title -->
	<div class="row">
		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="float-end mt-2">
						<div id="total-revenue-chart"></div>
					</div>
					<div>
						<h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
						<p class="text-muted mb-0">Total Revenue</p>
					</div>
					<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week </p>
				</div>
			</div>
		</div>
		<!-- end col-->
		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="float-end mt-2">
						<div id="orders-chart"> </div>
					</div>
					<div>
						<h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
						<p class="text-muted mb-0">Orders</p>
					</div>
					<p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week </p>
				</div>
			</div>
		</div>
		<!-- end col-->
		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="float-end mt-2">
						<div id="customers-chart"> </div>
					</div>
					<div>
						<h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
						<p class="text-muted mb-0">Customers</p>
					</div>
					<p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week </p>
				</div>
			</div>
		</div>
		<!-- end col-->
		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="float-end mt-2">
						<div id="growth-chart"></div>
					</div>
					<div>
						<h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
						<p class="text-muted mb-0">Growth</p>
					</div>
					<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week </p>
				</div>
			</div>
		</div>
		<!-- end col-->
	</div>
	<!-- end row-->
	<div class="row">
		<div class="col-xl-8">
			<div class="card">
				<div class="card-body">
					<div class="float-end">
						<div class="dropdown">
							<a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span> </a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton5"> <a class="dropdown-item" href="#">Monthly</a> <a class="dropdown-item" href="#">Yearly</a> <a class="dropdown-item" href="#">Weekly</a> </div>
						</div>
					</div>
					<h4 class="card-title mb-4">Sales Analytics</h4>
					<div class="mt-1">
						<ul class="list-inline main-chart mb-0">
							<li class="list-inline-item chart-border-left me-0 border-0">
								<h3 class="text-primary">$<span data-plugin="counterup">2,371</span><span class="text-muted d-inline-block font-size-15 ms-3">Income</span></h3> </li>
							<li class="list-inline-item chart-border-left me-0">
								<h3><span data-plugin="counterup">258</span><span class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
									</h3> </li>
							<li class="list-inline-item chart-border-left me-0">
								<h3><span data-plugin="counterup">3.6</span>%<span class="text-muted d-inline-block font-size-15 ms-3">Conversation Ratio</span></h3> </li>
						</ul>
					</div>
					<div class="mt-3">
						<div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
					</div>
				</div>
				<!-- end card-body-->
			</div>
			<!-- end card-->
		</div>
		<!-- end col-->
		<div class="col-xl-4">
			<div class="card bg-primary">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-sm-8">
							@if (auth()->user()->role == "admin" || auth()->user()->role == "guru")
								<p class="text-white font-size-18">Semangat untuk <b>menilai</b> siswa mu hari ini <i class="mdi mdi-arrow-right"></i></p>
								<div class="mt-4"> <a href="/fill-form" class="btn btn-success waves-effect waves-light">Isi Rapor</a> </div>	
							@endif

							@if (auth()->user()->role == "admin" || auth()->user()->role == "siswa")
								<p class="text-white font-size-18">Ayo isi <b>mutabaah</b>mu hari ini <i class="mdi mdi-arrow-right"></i></p>
								<div class="mt-4"> <a href="/mutabaah" class="btn btn-success waves-effect waves-light">Isi Mutabaah</a> </div>	
							@endif
						</div>
						<div class="col-sm-4">
							<div class="mt-4 mt-sm-0"> <img src="/assets/images/setup-analytics-amico.svg" class="img-fluid" alt=""> </div>
						</div>
					</div>
				</div>
				<!-- end card-body-->
			</div>
			<!-- end card-->
			
		<!-- end Col -->
	</div>
	<!-- end row-->

@endsection
