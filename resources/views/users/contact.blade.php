<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Contactez-nous</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/vendors/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/vendors/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/vendors/images/logo.png') }}">

    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('users/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('users/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('users/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('users/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('users/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('users/assets/img/favicons/mstile-150x150.png') }}"> --}}
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('users/assets/css/theme.css') }}" rel="stylesheet" />
   
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="{{ route('users.index') }}">
          {{-- <div  class="text-1000">Banque de </div>
          <div class="text-danger">&nbsp;Sang</div> --}}
          <img src="{{ asset('admin/vendors/images/logo.png') }}" alt="{{ config('app.name', 'Banque de Sang') }}" />
					 &nbsp; <span style="color: #1b00ff">Banque de</span>
                    <span class="font-weight-bold text-danger">Sang</span>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link fw-medium active" aria-current="page" href="{{ route('users.index') }}">Accueil </a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="{{ route('users.serch') }}">Trouver un donneur</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="{{ route('users.condition_de_donation')}}">Condition de donation</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="{{ route('users.contact') }}">Contactez-nous</a></li>
              <li class="nav-item"><a class="nav-link fw-medium btn btn-outline-primary rounded-pill order-0" href="{{ route('users.login') }}">Connectez-vous</a></li>

            </ul>
            {{-- <div class="ps-lg-5 float-right">
                <button class="btn btn-lg btn-primary rounded-pill order-0" >
                  <a href="{{ route('users.login') }}" class="nav-link fw-medium" style="color:white"> 
                  
                        Connectez-vous </a> </button>
              </div> --}}
            
          </div>
        </div>
      </nav>
      


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
      <!-- <section> close ============================-->
      <!-- ============================================-->

     

      <div class="clearfix"></div> 
      <br>
      <br>

      <br>

      <br>

      <div class="container">
        <h2 class="text-center">Nous envoyer un message</h2>
       
        

         <h3 class="text-center"> Tous les champs marqués par un astérisque sont obligatoires.</h3> 
          <div class="row">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adresse email</label>
                    <input type="email" class="form-control"  placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> * Nom / Prenom</label>
                    <input type="text" class="form-control"  placeholder="Telephone">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">* Numéro de téléphone</label>
                    <input type="numbre" class="form-control"  placeholder="Téléphone">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">* Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  
                  <div class="col text-center ">
                    <button type="submit" class="btn btn-outline-danger rounded-pill order-0">Envoyer</button>
                  </div>

            </form>
          </div>
      </div>

      

      

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('users/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('users/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('users/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('users/assets/js/theme.j') }}s"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
   

</body>

</html>