<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>TestApp</title>

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

<body>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
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
					<li><a href="{{ route('users.login') }}">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="{{ asset('admin/vendors/images/forgot-password.png') }}" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Mot de passe perdu ?</h2>
						</div>
						<h6 class="mb-20">Vous n'arrivez pas à vous connecter ? Vous avez oublié votre mot de passe ?</h6>
						<form>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Entrez votre adresse email">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-5">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
										-->
										<a class="btn btn-primary btn-lg btn-block" href="{{ route('users.index') }}">Envoyer</a>
									</div>
								</div>
								<div class="col-2">
									<div class="font-16 weight-600 text-center" data-color="#707373">OU</div>
								</div>
								<div class="col-5">
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('users.login') }}">Login</a>
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
	<script src="{{ asset('admin/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('admin/vendors/scripts/layout-settings.js') }}"></script>
</body>

</html>