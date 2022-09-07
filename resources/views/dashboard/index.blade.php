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
<div class="col-xl-4">
	@if (session()->has('register_succed'))
	<div class="alert alert-success" role="alert">
		{{session('register_succed')}}
	</div>
	@elseif (session()->has('register_failed'))
	<div class="alert alert-danger" role="alert">
		{{session('register_failed')}}
	</div>
	@endif
	<div class="card bg-primary">
		<div class="card-body">
			<div class="row align-items-center">
				<div class="col-sm-8">
					@if (auth()->user()->role == "admin" || auth()->user()->role == "guru")
					<p class="text-white font-size-18">Semangat untuk <b>menilai</b> siswa mu hari ini <i
							class="mdi mdi-arrow-right"></i></p>
					<div class="mt-4"> <a href="/fill-form" class="btn btn-success waves-effect waves-light">Isi Rapor</a> </div>
					@endif

					@if (auth()->user()->role == "admin" || auth()->user()->role == "siswa")
					<p class="text-white font-size-18">Ayo isi <b>mutabaah</b>mu hari ini <i class="mdi mdi-arrow-right"></i></p>
					<div class="mt-4"> <a href="/mutabaah" class="btn btn-success waves-effect waves-light">Isi Mutabaah</a>
					</div>
					@endif
				</div>
				<div class="col-sm-4">
					<div class="mt-4 mt-sm-0"> <img src="/assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
					</div>
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