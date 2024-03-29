<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Register e-Raport</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- App favicon -->
	<link rel="shortcut icon" href="/assets/images/favicon-cendekia.jpg">
	<!-- Bootstrap Css -->
	<link href={{asset('assets/css/bootstrap.min.css')}} id="bootstrap-style" rel="stylesheet" type="text/css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Icons Css -->
	<link href={{asset('assets/css/icons.min.css')}} rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<!-- App Css-->
	<link href={{asset('assets/css/app.min.css')}} id="app-style" rel="stylesheet" type="text/css" />
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body class="authentication-bg">
	<div class="account-pages my-3 pt-sm-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center">
						<a href="/" class="mb-5 d-block auth-logo"> <img src="/assets/images/CM WHITE.png" alt="" height="50"
								class="logo"> </a>
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-5">
					<div class="card">
						<div class="card-body p-4">
							<div class="text-center mt-2">
								<h5 class="text-primary">Register Account</h5>
								<p class="text-muted">Get your mutabaah account now.</p>
							</div>
							<div class="p-2 mt-4">
								<form action={{route('register.store')}} method="POST">
									@csrf

									<div class="mb-3">
										<label class="form-label" for="name">Name</label>
										<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
											placeholder="Masukan nama lengkap" value="{{ old('name') }}">
										@error('name')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>

									<div class="mb-3">
										<label class="form-label" for="angkatan">Angkatan</label>
										<input type="number" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan"
											id="angkatan" placeholder="Angkatan" value="{{ old('angkatan') }}"
											aria-describedby="angkatanHelp">
										<div id="angkatanHelp" class="form-text">Masukan hanya angka. Contoh: 01</div>
										@error('angkatan')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>

									<div class="mb-3">
										<label class="form-label" for="username">Username</label>
										<input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
											id="username" placeholder="Masukan username" value="{{ old('username') }}">
										@error('username')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>

									<div class="mb-3">
										<label class="form-label" for="email">Email</label>
										<input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
											id="email" placeholder="Masukan email" value="{{ old('email') }}">
										@error('email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="mb-3">
										<label class="form-label" for="userpassword">Password</label>
										<input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
											id="userpassword" placeholder="Enter password">
										@error('password')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>

									<div class="mt-3 text-end">
										<button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Register now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="mt-5 text-center">
						<p class="text-white">©
							<script>
								document.write(new Date().getFullYear())
							</script> e-Raport. Crafted with <i class="mdi mdi-heart text-danger"></i> by Divisi Pengabdi
						</p>
					</div>
				</div>
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>

	<!-- JAVASCRIPT -->
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<script src={{asset('assets/libs/jquery/jquery.min.js')}}></script>
	<script src={{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}></script>
	<script src={{asset('assets/libs/metismenu/metisMenu.min.js')}}></script>
	<script src={{asset('assets/libs/simplebar/simplebar.min.js')}}></script>
	<script src={{asset('assets/libs/node-waves/waves.min.js')}}></script>
	<script src={{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}></script>
	<script src={{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
	<!-- apexcharts -->
	<script src={{asset('assets/libs/apexcharts/apexcharts.min.js')}}></script>
	<script src={{asset('assets/js/pages/dashboard.init.js')}}></script>
	<!-- App js -->
	<script src={{asset('assets/js/app.js')}}></script>
</body>

</html>