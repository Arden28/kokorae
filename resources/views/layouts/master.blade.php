<!Doctype html>
<html lang="fr_CG">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Koverae SA">
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png')}}">

  <meta name="description" content="" />
  <meta name="keywords" content="koverae, saas, gestion de vente, magasin, point de vente, crm, afrique, brazzaville, congo, kover" />

  @include('includes.main-css')

  <title>@yield('page_title') | Koverae</title>


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "assets/images/logo/logo.png"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Logiciel de gestion d'entreprise.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.koverae.com">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ1L2Y7QS6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HJ1L2Y7QS6');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '291287213552434');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=291287213552434&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
    <style>
        .dropdown-item:focus{
            background-color: #026469;
            color: #ffffff;
        }
    </style>
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
        <div class="logo float-start">
            <a href="{{ route('home') }}" class="text-white">
                <img src="{{ asset('assets/images/logo/logo-1.png')}}" alt="Koverae Logo">
            </a>
          {{-- <img src="{{ asset('assets/images/logo/logo.png')}}" width="200px" height="70px" alt="Koverae Logo"> --}}
        </div>
        <div class="row align-items-center">

          <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center">
            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu">
                <li class="has-children" id="k-menu">
                  <a href="#">Industries</a>
                  <ul class="dropdown start">
                    <li><a href="portfolio.html">Commerce de détails</a></li>
                    <li><a href="single.html">Restauration & Hôtellerie</a></li>
                    <li><a href="portfolio.html">Grande distribution</a></li>
                  </ul>
                </li>
              <li><a href="{{ route('pricing') }}">Tarification</a></li>
              <li class="has-children">
                <a href="#">Entreprise</a>
                <ul class="dropdown">
                  <li><a href="{{ route('about') }}">A propos de nous</a></li>
                  {{-- <li><a href="{{ route('blogs.index') }}">Notre blog</a></li> --}}
                  <li><a href="{{ route('jobs.index') }}">Carrières</a></li>
                </ul>
              </li>
            </ul>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                @auth
                <li class="has-children">
                  <a href="#">{{ str()->limit(Auth::user()->name, 15) }}</a>
                  <ul class="dropdown">
                    <li class="dropdown-item"><a href="{{ route('kovers.home') }}">Mon compte</a></li>
                    <li class="dropdown-item"><a href="{{ route('kovers.databases') }}">Mes entreprises</a></li>
                    <hr class="dropdown-divider">

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link class="dropdown-item" :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Me déconnecter') }}
                        </x-dropdown-link>
                    </form>
                    {{-- <li><a class="dropdown-item" href="{{ route('jobs.index') }}">Me déconnecter</a></li> --}}
                  </ul>
                </li>
                @else
                <li class="cta-button" id="sign-in"><a href="{{ route('login') }}">Se connecter</a></li>
                @endauth
              <li class="cta-button" id="trial-link"><a href="{{ route('demo') }}">Réserver une démo</a></li>
            </ul>

            <a href="#" class="burger light ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>

          </div>

        </div>
      </nav> <!-- END nav -->

    </div> <!-- END container -->


    @yield('content')


    <div class="site-footer mt-4 border-top mt-8">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4">
              <div class="widget">
                <h3>A propos</h3>
                <p class="text-black">
                  <strong>Koverae</strong> est une solution SaaS pour une gestion d'entreprise simplifiée. Transformez votre façon d'opérer avec nos outils intuitifs et intégrés, spécialement conçus pour les <strong>PMEs</strong>.
                </p>
              </div>
              <div class="widget">
                <h3>Connectez-vous à nous</h3>
                <ul class="social list-unstyled">
                  <li><a href="https://www.facebook.com/koverae" target="_blank"><span class="icon-facebook"></span></a></li>
                  <li><a href="https://www.instagram.com/koverae_/" target="_blank"><span class="icon-instagram"></span></a></li>
                  <li><a href="https://www.linkedin.com/company/koverae/" target="_blank"><span class="icon-linkedin"></span></a></li>
                  <li><a href="https://github.com/Koverae" target="_blank"><span class="icon-github"></span></a></li>
                  <li><a href="tel:+242065996406"><span class="icon-phone"></span></a></li>
                  <li><a href="mailto:info@koverae.com"><span class="icon-envelope"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-6 col-sm-6 col-md-4">
                  <div class="widget">
                    <h3>Kovers</h3>
                    <ul class="links list-unstyled">
                      <li><a href="#">Support Clients</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                  <div class="widget">
                    <h3>Services</h3>
                    <ul class="links list-unstyled">
                      <li><a href="#">Intégrations</a></li>
                      <li><a href="#">Formations</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                  <div class="widget">
                    <h3>Entreprise</h3>
                    <ul class="links list-unstyled">
                      <li><a href="{{ route('about') }}">A propos de nous</a></li>
                      <li><a href="{{ route('jobs.index') }}">Carrières</a></li>
                      <li><a href="#">Documentation</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-center text-center text-black copyright">
            <div class="col-md-8">
              <p>Site Web réalisé avec <strong>Koverae</strong></p>
              {{-- <p>Copyright &copy;<script>document.write(new Date().getFullAn());</script>. Tous droits Réservés | <strong>Koverae</strong> --}}
              </p>
            </div>
          </div>
        </div>
    </div>


      {{-- <div id="overlayer"></div>
      <div class="loader">
        <div class="spinner-border" role="status">
          <span class="sr-only">Chargement...</span>
        </div>
      </div> --}}

      @include('includes.main-js')

      @yield('scripts')
    </body>
    </html>
