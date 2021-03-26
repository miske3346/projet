<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Login</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/vendors/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/vendors/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/vendors/images/logo.png') }}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/style.css') }}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between bd-highligh align-items-center">
			<div class="brand-logo">
				<a href="{{ route('users.index') }}">
					{{-- <div style="color: #1b00ff">Banque de Sang</div> --}}
					<img src="{{ asset('admin/vendors/images/logo.png') }}" alt="{{ config('app.name', 'Banque de Sang') }}" />
					 &nbsp; <span style="color: #1b00ff">Banque de</span>
                    <span class="font-weight-bold text-danger">Sang</span>
				</a>
			</div>
			
			<div class="login-menu">
				<ul>
					<li><a href="{{ route('users.register') }}">Inscrire</a></li>
				</ul>
			</div>
		</div> 
	</div>
	{{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="{{ route('users.index') }}">
            <div class="text-warning">Banque de </div>
            <div class="text-1000">Sang</div>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link fw-medium active" aria-current="page" href="{{ route('users.index') }}">Accueil </a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="{{ route('users.serch') }}">Trouver un donneur</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#testimonial">Qui sommes nous?</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#faq">Contact</a></li>
            </ul>
            <div class="ps-lg-5">
              <button class="btn btn-lg btn-primary rounded-pill order-0" >
                <a href="{{ asset('users.login') }}"  style="color:white"> 
                Conecter </a> </button>
            </div>
            
          </div>
        </div>
      </nav> --}}
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{ asset('admin/vendors/images/hero.png') }}" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Connectez-vous</h2>
						</div>
						<form>
							
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Login">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="Mot de passe">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Se souvenir de Moi</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="{{ route('users.fp') }}">Mot de Passw perdu?</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<a class="btn btn-primary btn-lg btn-block" href="{{ route('users.index') }}">Se Connecter</a>
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OU</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('users.register') }}">S'Inscrire</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{ asset('admin/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('admin/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
</body>
</html>