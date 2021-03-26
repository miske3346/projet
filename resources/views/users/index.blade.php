<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>TestApp</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    
	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/vendors/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/vendors/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/vendors/images/logo.png') }}">
    {{-- <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('users/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('users/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('users/assets/img/favicons/favicon-16x16.png') }}"> --}}
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('users/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('users/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('users/assets/img/favicons/mstile-150x150.png') }}"> --}}
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('users/assets/css/theme.css') }}" rel="stylesheet" />
    
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script> --}}

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
              {{-- <li class="nav-item"><a class="nav-link fw-medium" href="#pricing">Pricing</a></li> --}}
              <li class="nav-item"><a class="nav-link fw-medium" href="{{ route('users.condition_de_donation')}}">Condition de donation</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="{{ route('users.contact') }}">Contact</a></li>
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



      {{-- <marquee behavior="" direction=""><h2 class="text-danger">test app test app test app</h2> </marquee> --}}
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5">

        <div class="container">
          <div class="row align-items-center mb-6">
            <div class="col-md-5 col-lg-4 offset-lg-1">
              <h1 class="fw-bold lh-base"><img class="img-fluid" src="{{ asset('users/ssets/img/illustrations/network.png') }}" width="90" alt="" /></h1>
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1 border-start py-5 ps-5">
              <p class="mb-0">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
              <div class="py-4"><img class="img-fluid" src="{{ asset('users/assets/img/illustrations/automatic.png') }}" width="90" alt="" /></div>
              <h5 class="fw-bold text-danger">Fast performance</h5>
              <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
            </div>
            <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
              <div class="py-4"><img class="img-fluid" src="{{ asset('users/ssets/img/illustrations/network.png') }}" width="90" alt="" /></div>
              <h5 class="fw-bold text-primary">Prototyping</h5>
              <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
            </div>
            <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
              <div class="py-4"><img class="img-fluid" src="{{ asset('users/assets/img/illustrations/rewards.png') }}" width="90" alt="" /></div>
              <h5 class="fw-bold text-success">Vector Editing</h5>
              <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4" src="assets/img/illustrations/call-to-action.png" width="550" alt="" /></div>
            <div class="col-md-6 text-center text-md-start offset-md-1">
              <h6 class="fw-bold fs-4 display-3 lh-sm">Designed &amp; built by<br />the latest code <br />integration</h6>
              <p class="my-4 pe-xl-5"> The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p><a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Learn more</a>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
     
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-8" id="pricing">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xxl-5 text-center mb-3">
              <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">Get awesome features, without extra charges</h6>
              <p class="mb-4">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
            </div>
          </div>
          <div class="row flex-center">
            <div class="col-12 mb-3">
              <div class="d-flex justify-content-center">
                <label class="form-check-label me-2" for="customSwitch1">Monthly</label>
                <div class="form-check form-switch">
                  <input class="form-check-input" id="customSwitch1" type="checkbox" checked="checked" />
                  <label class="form-check-label align-top" for="customSwitch1">Yearly</label>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card shadow-lg mb-4 border-0">
                <div class="card-header border-bottom-0 pt-7 pb-5">
                  <div class="d-flex justify-content-center">
                    <h1 class="fw-bold">$0</h1><span class="d-flex align-items-center">/month</span>
                  </div>
                  <h5 class="fw-bold text-center">Business Class</h5><span class="text-700 text-center d-block">For small teams or office</span>
                </div>
                <div class="card-body mx-auto">
                  <ul class="list-unstyled mb-4">
                    <li class="text-700 py-2 text-secondary">Darg &amp; Drop Builder</li>
                    <li class="text-700 py-2 text-secondary">1,000's of Templates</li>
                    <li class="text-700 py-2 text-secondary">Blog Support Tools</li>
                    <li class="text-700 py-2 text-secondary">eCommerce Store </li>
                  </ul><a class="btn btn-lg btn-primary rounded-pill mb-3" href="#">Start free trial</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card shadow-lg mb-4">
                <div class="card-header border-bottom-0 pt-7 pb-5">
                  <div class="d-flex justify-content-center">
                    <h1 class="fw-bold">$99</h1><span class="d-flex align-items-center">/month</span>
                  </div>
                  <h5 class="fw-bold text-center">Pro Master</h5><span class="text-700 text-center d-block">For small teams or office</span>
                </div>
                <div class="card-body mx-auto">
                  <ul class="list-unstyled mb-4">
                    <li class="text-700 py-2 text-secondary">Darg &amp; Drop Builder</li>
                    <li class="text-700 py-2 text-secondary">1,000's of Templates</li>
                    <li class="text-700 py-2 text-secondary">Blog Support Tools</li>
                    <li class="text-700 py-2 text-secondary">eCommerce Store </li>
                  </ul>
                  <div class="d-flex flex-column"> <a class="btn btn-lg btn-primary rounded-pill mb-3" href="#">Start free trial</a><a href="#">Or Start 14 days trail</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


   
      <!-- <section> begin ============================-->
        
       <!-- <section> close ============================-->
      <!-- ============================================-->


     


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-8 bg-1000">

        <div class="container">
          <div class="row flex-center">
            <div class="col-auto mb-5"><a class="pe-2 d-flex align-items-center text-decoration-none fw-bold fs-3" href="#">
                <div class="text-warning">App</div>
                <div class="text-white">Lab</div>
              </a></div>
          </div>
          <div class="row flex-center">
            <div class="col-auto mb-5">
              <ul class="list-unstyled list-inline mb-0">
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Home</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Key Features</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Pricing</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Testimonial</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="row flex-center">
            <div class="col-auto mb-5">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-hash" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 16 16">
                      <path d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                    </svg></a></li>
              </ul>
            </div>
          </div>
          <div class="row flex-center">
            <div class="col-auto">
              <p class="mb-0 fs--1 text-700">&copy; This template is made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a class="text-700" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
              </p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


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
   
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60387a1e5ed775a4"></script>

</body>

</html>