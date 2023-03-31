<!Doctype html>
<html lang="fr_CG">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png')}}">

  <meta name="description" content="" />
  <meta name="keywords" content="koverae, saas, gestion de vente, magasin, point de vente, crm, afrique, brazzaville, congo, kover" />


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/feather/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

  <title>@yield('page_title') | Koverae.com</title>

  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "assets/images/logo/logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Commençons à développer votre entreprise.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.koverae.com">

</head>
<body>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="container">


      <nav class="site-nav">
        <div class="logo">
          <!-- <a href="index.html" class="text-white">Koverae<span class="text-black">.</span></a> -->
          <img src="{{ asset('assets/images/logo/logo.png')}}" width="200px" height="70px" alt="Koverae Logo">
        </div>
        <div class="row align-items-center">


          <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center">
            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu">
              <li class="active"><a href="{{ route('home') }}">Acceuil</a></li>
              <li><a href="#features">Fonctionnalités</a></li>
              <li><a href="#pricing">Prix</a></li>
            </ul>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right menu-absolute">
              <li class="cta-button"><a href="https://koverae.com/" target="_blank">Réserver Gratuitement</a></li>
            </ul>

            <a href="#" class="burger light ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>

          </div>

        </div>
      </nav> <!-- END nav -->

    </div> <!-- END container -->


    @yield('content')


    <div class="site-footer">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4">
              <div class="widget">
                <h3>A propos</h3>
                <p>
                  Notre mission chez <strong>Koverae</strong> est de soutenir les commerçants en leur offrant des outils performants pour améliorer leur expérience client.
                </p>
              </div>
              <div class="widget">
                <h3>Connectez-vous à nous</h3>
                <ul class="social list-unstyled">
                  <li><a href="https://www.facebook.com/koverae" target="_blank"><span class="icon-facebook"></span></a></li>
                  <li><a href="https://twitter.com/koverae_cg" target="_blank"><span class="icon-twitter"></span></a></li>
                  <li><a href="https://www.instagram.com/koverae_/" target="_blank"><span class="icon-instagram"></span></a></li>
                  <li><a href="https://www.linkedin.com/company/koverae/" target="_blank"><span class="icon-linkedin"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="widget">
                    <h3>Navigations</h3>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                  <div class="widget">
                    <ul class="links list-unstyled">
                      <li><a href="#">Acceuil</a></li>
                      <li><a href="#">A propos de nous</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                  <div class="widget">
                    <ul class="links list-unstyled">
                      <li><a href="#">Contact</a></li>
                      <li><a href="#">Support Client</a></li>
                      <li><a href="#">Confidentialité</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                  <div class="widget">
                    <ul class="links list-unstyled">
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Carrières</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-center text-center copyright">
            <div class="col-md-8">
              <p>Copyright &copy;<script>document.write(new Date().getFullAn());</script>. Tous droits Réservés | <strong>Koverae</strong>
              </p>
            </div>
          </div>
        </div>
      </div>


      <div id="overlayer"></div>
      <div class="loader">
        <div class="spinner-border" role="status">
          <span class="sr-only">Chargement...</span>
        </div>
      </div>

      <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
      <script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
      <script src="{{ asset('assets/js/popper.min.js')}}"></script>
      <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
      <script src="{{ asset('assets/js/aos.js')}}"></script>
      <script src="{{ asset('assets/js/imagesloaded.pkgd.js')}}"></script>
      <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
      <script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
      <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
      <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
      <script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>
      <script src="{{ asset('assets/js/custom.js')}}"></script>


    </body>
    </html>
