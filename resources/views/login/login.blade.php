{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
        <main class="form-signin">
        <form action="/login" method="POST">
          @csrf
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            @if (session()->has('berhasil'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if (session()->has('loginGagal'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginGagal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus>
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            </div>  
            <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <label for="password">Password</label>
            </div>

            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
        <label><a href="/register" style="text-decoration:none">don't have an account ?</a></label>
        <p class="mt-5 mb-3 text-muted">&copy; Cendekia Muda 2021</p>
        </main>

  </body>
</html> --}}

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Login e-Raport</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- App favicon -->
	<link rel="shortcut icon" href="/assets/images/favicon-cendekia.jpg">
	<!-- Bootstrap Css -->
	<link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Icons Css -->
	<link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<!-- App Css-->
	<link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body class="authentication-bg">
	<div class="account-pages my-3 pt-sm-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center">
						<a href="/" class="mb-5 d-block auth-logo"> <img src="/assets/images/CM WHITE.png" alt="" width="150" class="logo"> </a>
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-5">
					<div class="card">
						<div class="card-body p-4">
							<div class="text-center mt-2">
								<h5 class="text-primary">Welcome Back !</h5>
								<p class="text-muted">Log in to continue to e-Raport.</p>
							</div>
							<div class="p-2 mt-4">
								<form action="/login" method="POST">
                  @csrf

                  @if (session()->has('berhasil'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('berhasil') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif

                  @if (session()->has('loginGagal'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session('loginGagal') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif

									<div class="mb-3">
										<label class="form-label" for="email">Email</label>
										<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter email"> </div>

                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror

									<div class="mb-3">
										<label class="form-label" for="userpassword">Password</label>
										<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="userpassword" placeholder="Enter password"> </div>
									<div class="mt-3 text-end">
										<button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="mt-5 text-center">
						<p>©
							<script>
							document.write(new Date().getFullYear())
							</script> e-Raport. Crafted with <i class="mdi mdi-heart text-danger"></i> by Divisi Pengabdi</p>
					</div>
				</div>
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>

	<!-- JAVASCRIPT -->
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<script src="/assets/libs/jquery/jquery.min.js"></script>
	<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="/assets/libs/simplebar/simplebar.min.js"></script>
	<script src="/assets/libs/node-waves/waves.min.js"></script>
	<script src="/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- apexcharts -->
	<script src="/assets/libs/apexcharts/apexcharts.min.js"></script>
	<script src="/assets/js/pages/dashboard.init.js"></script>
	<!-- App js -->
	<script src="/assets/js/app.js"></script>
</body>

</html>
