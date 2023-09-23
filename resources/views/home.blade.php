@extends('layouts.master')

@section('page_title', "Logiciel de gestion d'entreprise")


@section('content')

<div class="hero-slant overlay" id="hero" data-stellar-background-ratio="0.5" style=" background-image: url('{{asset('assets/images/hero-min.jpg')}}')">

  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-7 intro">
        <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">Simplifiez la gestion de votre entreprise</h1>
        <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">
          <strong>Koverae</strong> vous offre une gamme de fonctionnalités qui simplifient la gestion de l'ensemble du processus commercial, de la gestion des stocks à la facturation en passant par les commandes et les expéditions.
        </p>
        <a class="btn btn-primary" href="https://koverae.com/" target="_blank">Réserver une démo</a>

      </div>


    </div>


  </div>

  <div class="slant" style="background-image: url('{{asset('assets/images/slant.svg')}}');"></div>
</div>

<!-- <div class="py-3">
  <div class="container">

    <div class="owl-logos owl-carousel">
      <div class="item">
        <img src="{{ asset('assets/images/logo-puma.png')}}" alt="Image" class="img-fluid">
      </div>
      <div class="item">
        <img src="{{ asset('assets/images/logo-adobe.png')}}" alt="Image" class="img-fluid">
      </div>
      <div class="item">
        <img src="{{ asset('assets/images/logo-google.png')}}" alt="Image" class="img-fluid">
      </div>
      <div class="item">
        <img src="{{ asset('assets/images/logo-paypal.png')}}" alt="Image" class="img-fluid">
      </div>
      <div class="item">
        <img src="{{ asset('assets/images/logo-adobe.png')}}" alt="Image" class="img-fluid">
      </div>
      <div class="item">
        <img src="{{ asset('assets/images/logo-google.png')}}" alt="Image" class="img-fluid">
      </div>


    </div>


  </div>

</div> -->


 <div class="site-section" id="features">


  <div class="container app-section">
    <div class="">
      <h2 class="col-12 title-center mb-5" data-aos="fade-up" data-aos-delay="500">
          Une <b>app</b> pour chacun de vos besoins
      </h2>
    </div>

    <div class="row">

        <div class="col col-lg-4 d-flex flex-column align-items-center apps-list px-3">
            <h3 class="app_list_col_title" data-aos="fade-up" data-aos-delay="500">Optimisez vos ventes</h3>
            <div class="d-inline-flex k_animate">
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/crm.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">CRM</b>
                </a>
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/pos.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">Point de Vente</b>
                </a>
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/sales.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">Ventes</b>
                </a>
            </div>
        </div>


        <div class="col col-lg-4 d-flex flex-column align-items-center apps-list px-3">
            <h3 class="app_list_col_title" data-aos="fade-up" data-aos-delay="500">Adaptez vos services</h3>
            <div class="d-inline-flex k_animate">
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/service.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">Service</b>
                </a>
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/helpdesk.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">Assistance</b>
                </a>
            </div>
        </div>


        <div class="col col-lg-4 d-flex flex-column align-items-center apps-list px-3">
            <h3 class="app_list_col_title" data-aos="fade-up" data-aos-delay="500">Simplifiez vos opérations</h3>
            <div class="d-inline-flex k_animate">
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/inventory.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">Inventaire</b>
                </a>
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/mrp.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">MRP</b>
                </a>
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/purchase.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">Achats</b>
                </a>
            </div>
        </div>


        <div class="col col-lg-4 d-flex flex-column align-items-center apps-list px-3">
            <h3 class="app_list_col_title" data-aos="fade-up" data-aos-delay="500">Gérez vos finances</h3>
            <div class="d-inline-flex k_animate">
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/invoice.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">Factures</b>
                </a>
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/accounting.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">Finances</b>
                </a>
            </div>
        </div>


        <div class="col col-lg-4 d-flex flex-column align-items-center apps-list px-3">
            <h3 class="app_list_col_title" data-aos="fade-up" data-aos-delay="500">Créez de magnifiques sites web</h3>
            <div class="d-inline-flex k_animate">
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/website.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">Site web</b>
                </a>
                <a class="app_entry" data-aos="fade-up" data-aos-delay="500" href="">
                    <img src="{{ asset('assets/images/apps_icons/ecom.png') }}" alt="" class="deep-1 p-2 inline">
                    <b class="text-body inline">eCommerce</b>
                </a>
            </div>
        </div>

    </div>

    <div class="col-12 text-center"  data-aos="fade-up" data-aos-delay="500">
        <button class="btn btn-dark" href="">
            Et bien plus
        </button>
    </div>
  </div>
</div>


<div class="site-section overlay site-cover-2" style="background-image: url('{{asset('assets/images/img_v_3-min.jpg')}}')">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto text-center">
        <h5 class="text-white mb-4">N'attendez plus pour découvrir tous les avantages de <strong>Koverae</strong>, essayez gratuitement dès maintenant !</h5>
        <p class="mb-0"><a href="https://dashboard.koverae.com/auth/register?from=site-section&&utm=start_trial" target="_blank" rel="noopener" class="btn btn-primary">Commencer gratuitement</a></p>
      </div>
    </div>
  </div>
</div>


<div class="features-lg ">
  <div class="container">
    <div class="row feature align-items-center justify-content-between">
      <div class="col-lg-7 section-stack order-lg-2 mb-4 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="0">

        <div class="image-stack">
          <div class="image-stack__item image-stack__item--top">
            <img src="{{ asset('assets/images/img_h_2-min.jpg')}}" alt="">
          </div>
          <div class="image-stack__item image-stack__item--bottom">
            <img src="{{ asset('assets/images/img_h_3-min.jpg')}}" alt="">
          </div>
        </div>

      </div>
      <div class="col-lg-4 section-title" data-aos="fade-up" data-aos-delay="100">

        <h2 class="font-weight-bold mb-4 heading">
          Révolutionnez votre entreprise
        </h2>
        <p class="mb-4">
          Votre entreprise est unique et a des besoins spécifiques en matière de gestion. <strong>Koverae</strong> est conçu pour répondre à ces besoins en offrant une solution personnalisée pour aider les PMEs et professionnels à gérer leurs activités commerciales de manière efficace et rentable.
        </p>
        <p><a href="#" class="btn btn-primary">Commencer</a></p>

      </div>

    </div>
  </div>
</div>

<div class="features-lg">
  <div class="container">

    <div class="row feature align-items-center justify-content-between">
      <div class="col-lg-7 mb-4 mb-lg-0 section-stack" data-aos="fade-up" data-aos-delay="0">
        <img src="{{ asset('assets/images/img_h_5-min.jpg')}}" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-4 section-title" data-aos="fade-up" data-aos-delay="100">

        <h2 class="font-weight-bold mb-4">
          Centralisez vos données
        </h2>
        <p class="mb-4">
          <strong>Koverae</strong> offre une solution complète pour la gestion des activités commerciales de votre entreprise. L'une de ses principales caractéristiques est la centralisation de toutes vos données commerciales en un seul endroit, offrant une vue complète de votre entreprise.
        </p>
        <p><a href="#" class="btn btn-primary">Commencer</a></p>

      </div>

    </div>

  </div>
</div>


<div class="features-lg ">
  <div class="container">
    <div class="row feature align-items-center justify-content-between">
      <div class="col-lg-7 section-stack order-lg-2 mb-4 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="0">

        <div class="image-stack">
          <div class="image-stack__item image-stack__item--top">
            <img src="{{ asset('assets/images/img_h_8-min.jpg')}}" alt="">
          </div>
          <div class="image-stack__item image-stack__item--bottom">
            <img src="{{ asset('assets/images/img_h_9-min.jpg')}}" alt="">
          </div>
        </div>

      </div>
      <div class="col-lg-4 section-title" data-aos="fade-up" data-aos-delay="100">

        <h2 class="font-weight-bold mb-4 heading">
          Une interface utilisateur intuitive pour une gestion facile
        </h2>
        <p class="mb-4">
          Notre objectif chez <strong>Koverae</strong> est de rendre l'ensemble du processus de gestion d'activité commerciale le plus simple et efficace possible, ce qui signifie que nous prenons en compte les commentaires des utilisateurs pour créer une interface utilisateur qui reflète leur expérience et leurs besoins.
        </p>
        <p><a href="#" class="btn btn-primary">Commencer</a></p>

      </div>

    </div>
  </div>
</div>

<div class="pricing-section" id="pricing">
    <livewire:plan.plan-section />
</div>



<div class="testimonial-section">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-4 mb-5 section-title" data-aos="fade-up" data-aos-delay="0">

        <h2 class="mb-4 font-weight-bold heading">Ceux qui nous font confiance</h2>
        <p class="mb-4">
          Nous sommes ravis de partager les témoignages de nos clients, qui ont eu une expérience positive avec notre logiciel de gestion d'activité commerciale et ont constaté une réelle amélioration dans la gestion de leurs activités.
        </p>
        <p><a href="#" class="btn btn-primary">Réservez une démo</a></p>
      </div>
      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonial--wrap">
          <div class="owl-single owl-carousel no-dots no-nav">

            <div class="testimonial-item">
              <div class="d-flex align-items-center mb-4">
                <div class="photo mr-3">
                  <img src="{{ asset('assets/images/person_1-min.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="author">
                  <cite class="d-block mb-0">MASSAMBA Judie Brelle</cite>
                  <span>Gérante, ETS Marie Reine.</span>
                </div>
              </div>
              <blockquote>
                <p>&ldquo;
                  Notre entreprise a connu une croissance rapide et nous avions besoin d'un outil de gestion complet pour gérer toutes nos activités. Avec <strong>Koverae</strong>, nous avons pu rationaliser nos processus et automatiser de nombreuses tâches manuelles. Cela nous a permis de nous concentrer sur la croissance de notre entreprise tout en gardant un contrôle total sur nos activités.
                  &rdquo;</p>
              </blockquote>
            </div>

            <div class="testimonial-item">
              <div class="d-flex align-items-center mb-4">
                <div class="photo mr-3">
                  <img src="{{ asset('assets/images/person_2-min.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="author">
                  <cite class="d-block mb-0">MALONGA Charly</cite>
                  <span>Directeur Général, <strong>Banéo SARL</strong>.</span>
                </div>
              </div>
              <blockquote>
                <p>&ldquo;
                  Notre entreprise avait besoin d'un outil de gestion efficace pour suivre nos ventes, nos fournisseurs et nos stocks en temps réel. <strong>Koverae</strong> a été la solution idéale pour répondre à nos besoins. Nous avons été impressionnés par la facilité d'utilisation de l'interface, ainsi que par la variété de fonctionnalités proposées, notamment la gestion de la facturation et des paiements. Depuis que nous avons commencé à utiliser ce logiciel, notre productivité a considérablement augmenté et nous sommes en mesure de répondre aux demandes de nos clients plus rapidement et plus efficacement.
                  &rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div class="custom-nav-wrap">
            <a href="#" class="custom-owl-prev"><span class="icon-keyboard_backspace"></span></a>
            <a href="#" class="custom-owl-next"><span class="icon-keyboard_backspace"></span></a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light" id="blog-section">
  <div class="container">
    <div class="row">
      <div class="col-7 mb-4 position-relative text-center mx-auto">
        <h2 class="font-weight-bold text-center">Notre Blog</h2>
        <p>Profitez de nos derniers articles de blogs.</p>
      </div>

    </div>
    <div class="row">


      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
        <div class="blog_entry">
          <a href="#"><img src="{{ asset('assets/images/img_h_3-min.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <h3><a href="#">Far far away, behind the word mountains</a></h3>
            <span class="date">April 25, 2019</span>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p class="more"><a href="#">Continuer la lecture...</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
        <div class="blog_entry">
          <a href="#"><img src="{{ asset('assets/images/img_h_5-min.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <h3><a href="#">Far far away, behind the word mountains</a></h3>
            <span class="date">April 25, 2019</span>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p class="more"><a href="#">Continuer la lecture...</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
        <div class="blog_entry">
          <a href="#"><img src="{{ asset('assets/images/img_h_7-min.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <h3><a href="#">Far far away, behind the word mountains</a></h3>
            <span class="date">April 25, 2019</span>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p class="more"><a href="#">Continuer la lecture...</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4 mx-auto">
        <a href="#" class="btn btn-primary btn-block">See All Posts</a>
      </div>
    </div>
  </div>
</div>

<div class="site-section overlay site-cover-2" style="background-image: url('{{asset('assets/images/img_v_3-min.jpg')}}')">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto text-center">
        <h2 class="text-white mb-4">Faites un tour, c'est gratuit !! :)</h2>
        <p class="mb-0"><a href="https://koverae.com/" rel="noopener" class="btn btn-primary">Réserver une démo</a></p>
      </div>
    </div>
  </div>
</div>


@endsection
