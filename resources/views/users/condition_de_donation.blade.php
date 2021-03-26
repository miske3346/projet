<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->

    <title>condition de donation</title>
    <!-- ===============================================-->
    


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
            {{-- <div class="ps-lg-5">
              <button class="btn btn-lg btn-primary rounded-pill order-0" >
                <a href="{{ route('users.login') }}"  class="nav-link fw-medium" style="color:white"> 
                    Connectez-vous </a> </button>
            </div> --}}
            
          </div>
        </div>
      </nav>

      <div class="container">

      
      <section >

      {{-- <marquee behavior="" direction=""><h2 class="text-danger">test app test app test app</h2> </marquee> --}}




<section class="py-8" >

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 text-center mb-3">
          <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">Condition de donation</h6>
          {{-- <p class="mb-5">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p> --}}
        </div>
      </div>
      <div class="row flex-center">
        <div class="col-lg-9">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="heading1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><span class="mb-0 fw-bold text-start fs-1 text-1000">Qu'est-ce qu'un donateur devrait faire avant de donner?</span></button>
              </h2>
              <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-100">
                    <ul>
                        <li>Dormir au moins 5 heures.</li>
                        <li>Mangez</li>
                        <li>Apportez une pièce d'identité avec lui</li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="heading2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2"><span class="mb-0 fw-bold text-start fs-1 text-1000">Qui peut faire un don?</span></button>
              </h2>
              <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-100">
                    <ul>
                        <li>Tout le monde 18 ans ou plus vieux</li>
                        <li>Toute personne pesant 50 kg ou plus</li>
                        <li>A un pourcentage d'hémoglobine approprié pour faire un don</li>
                        <li>N'a aucune maladie qui empêche le don</li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3"><span class="mb-0 fw-bold text-start fs-1 text-1000">Chose qui empêche le don:</span></button>
              </h2>
              <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-100">
                  <ul>
                    <li>Un donateur ne devrait pas donner plus d'une fois en trois mois</li>
                    <li>Une personne récemment opérée ne peut pas faire de don</li>
                    <li>Si un donneur a eu ou a l'une de ces maladies:
                     <ul> <li>tension artérielle, diabète, malarya au cours des deux dernières années, insuffisance rénale, hépatomégalie, maladie pulmonaire, fièvre, rhumatisme, maladie thyroïdienne, maladies héréditaires du sang et saignements</li>
                     </ul>
                    </li>
                    <li>Les femmes ne devraient pas être en période</li>
                    <li>Les femmes n'auraient pas dû être enceintes. (3 mois après l'accouchement)</li>
                </ul>
                 </div>
              </div>
            </div>
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4"><span class="mb-0 fw-bold text-start fs-1 text-1000">Combien de temps dure le don?</span></button>
              </h2>
              <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-100">
                  <ul>
                    <li>20 minutes au total</li>
                    <li>La durée idéale entre deux dons pour la même personne est de 3 mois</li>
                </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5"><span class="mb-0 fw-bold text-start fs-1 text-1000">Quelques recommandations après avoir fait un don:</span></button>
              </h2>
              <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-100">
                  <ul>
                    <li>Récupérer pendant 10 minutes</li>
                    <li>Ne faites pas d'effort physique pendant au moins 2 heures</li>
                    <li>Prendre des fluides pour récupérer la perte</li>
                </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of .container-->

  </section>
</div>
      
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