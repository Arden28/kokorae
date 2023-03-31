@extends('layouts.master')

@section('page_title', 'Commençons à développer votre entreprise')


@section('content')

<div class="hero-slant overlay" data-stellar-background-ratio="0.5" style=" background-image: url('{{asset('assets/images/hero-min.jpg')}}')">

  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-7 intro">
        <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">Simplifiez la gestion de votre entreprise</h1>
        <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">
          <strong>Koverae</strong> vous offre une gamme de fonctionnalités qui simplifient la gestion de l'ensemble du processus commercial, de la gestion des stocks à la facturation en passant par les commandes et les expéditions.
        </p>
        <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="200">
          <input type="text" class="form-control" placeholder="Enter email address">
          <input type="submit" class="btn btn-primary" value="Réservez une démo">
        </form>

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
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center"  data-aos="fade-up">
        <h2 class="heading font-weight-bold mb-3">Une app pour chacun de vos besoins</h2>
      </div>
    </div>
    <div class="row align-items-stretch">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4">
            <span class="feather-trending-up"></span>
          </div>
          <div>
            <h3><strong>Ventes</strong></h3>
            <p>
              Avec ce module, vous pouvez facilement créer des devis, des factures et des bons de commande, suivre les paiements et les factures en attente, et gérer les relations avec les clients.
            </p>
            <p><a href="#">En savoir +</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4">
            <span class="feather-package"></span>
          </div>
          <div>
            <h3><strong>Inventaire</strong></h3>
            <p>
              Assurez la traçabilité de votre inventaire en toute simplicité grâce à notre module de gestion d'inventaire.
            </p>
            <p><a href="#">En savoir +</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4">
            <span class="feather-users"></span>
          </div>
          <div>
            <h3><strong>CRM</strong></h3>
            <p>
              Notre module de gestion de clients et fournisseurs facilite la gestion des relations commerciales pour une communication optimale et une fidélisation durable.
            </p>
            <p><a href="#">En savoir +</a></p>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4">
            <span class="feather-pie-chart"></span>
          </div>
          <div>
            <h3><strong>Analyse</strong></h3>
            <p>
              Notre module de statistiques fournit des insights clés pour améliorer votre prise de décision et votre performance commerciale.
            </p>
            <p><a href="#">En savoir +</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4">
            <span class="feather-shopping-bag"></span>
          </div>
          <div>
            <h3><strong>Point de Vente</strong></h3>
            <p>
              Notre module point de vente permet des transactions rapides et fluides, une gestion de caisse optimale et une expérience client personnalisée.
            </p>
            <p><a href="#">En savoir +</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4">
            <span class="feather-users"></span>
          </div>
          <div>
            <h3><strong>Ressources Humaines</strong></h3>
            <p>
              Notre module Ressources Humaines facilite la gestion des employés avec des fonctionnalités pour la paie, la gestion des absences, et plus encore.
            </p>
            <p><a href="#">En savoir +</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="site-section overlay site-cover-2" style="background-image: url('{{asset('assets/images/img_v_3-min.jpg')}}')">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto text-center">
        <h2 class="text-white mb-4">Commencez maintenant ! C'est gratuit !!</h2>
        <p class="mb-0"><a href="https://koverae.com/" rel="noopener" class="btn btn-primary">Commencer gratuitement</a></p>
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
  <div class="container">
    <div class="section-title text-center mb-5" data-aos="fade-up" data-aos-delay="0">
      <h2 class="heading font-weight-bold mb-5">Nos Prix</h2>

      <div class="switch-plan">

        <div class="d-inline-flex align-items-center">
          <div class="period">Mensuel</div>
          <a href="#" class="period-toggle js-period-toggle"></a>
          <div class="period"><span class="mr-2">Annuel</span><span class="save-percent">Epargnez 25%</span></div>
        </div>

      </div>
    </div>


    <div class="row">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
        <div class="pricing-item ">
          <h3>Standard</h3>
          <div class="description">
            <p>
              Cette formule convient aux petites entreprises qui ont des besoins de base en matière de gestion des activités commerciales
            </p>
          </div>
          <div class="period-change mb-4 d-block">
            <div class="price-wrap">
              <div class="price">
                <div>
                  <div>5000 FCFA</div>
                  <div>42000 FCFA</div>
                </div>
              </div>
            </div>
            <div class="d-inline-flex align-items-center text-center period-wrap">
              <div class="d-inline-block mr-1">Par</div>
              <div class="d-block text-left period">
                <div>
                  <div>Mois</div>
                  <div>An</div>
                </div>
              </div>
            </div>
          </div>
          <ul class="list-unstyled mb-4">
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Gestion de Ventes</span></li>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Gestion Inventaire</span></li>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Gestion Point de Ventes</span></li>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Statistiques de base</span></li>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Support Client à distance (SMS, Email, Whatsapp)</span></li>
          </ul>
          <div>
            <a href="#" class="btn btn-primary">Commencer</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-item active">
          <h3>Medium</h3>
          <div class="description">
            <p>
              Cette formule est conçue pour les entreprises en croissance qui ont besoin de fonctionnalités plus avancées pour gérer leurs activités commerciales.
            </p>
          </div>
          <div class="period-change mb-4 d-block">
            <div class="price-wrap">
              <div class="price">
                <div>
                  <div>15000 FCFA</div>
                  <div>156000 FCFA</div>
                </div>
              </div>
            </div>
            <div class="d-inline-flex align-items-center text-center period-wrap">
              <div class="d-inline-block mr-1">Par</div>
              <div class="d-block text-left period">
                <div>
                  <div>Mois</div>
                  <div>An</div>
                </div>
              </div>
            </div>
          </div>
          <ul class="list-unstyled mb-4">
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Formule Standard</span></li>
            <hr>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Gestion de Ressources Humaines</span></li>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Gestion de Caisse</span></li>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Plus de 5 Points de Ventes</span></li>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Support Client en présentiel</span></li>
          </ul>
          <div>
            <a href="#" class="btn btn-primary">Commencer</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-item ">
          <h3>Enterprise</h3>
          <div class="description">
            <p>
              Cette formule est destinée aux grandes entreprises qui ont des besoins complexes en matière de gestion des activités commerciales
            </p>
          </div>
          <div class="period-change mb-4 d-block">
            <div class="price-wrap">
              <div class="price">
                <div>
                  <div>45000 FCFA</div>
                  <div>504000 FCFA</div>
                </div>
              </div>
            </div>
            <div class="d-inline-flex align-items-center text-center period-wrap">
              <div class="d-inline-block mr-1">Par</div>
              <div class="d-block text-left period">
                <div>
                  <div>Mois</div>
                  <div>An</div>
                </div>
              </div>
            </div>
          </div>
          <ul class="list-unstyled mb-4">
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Formule Medium</span></li>
            <hr>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Plus de 10 Points de Ventes</span></li>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Personnaliser les tableaux de bord</span></li>
            <li class="d-flex"><span class="feather-check-square mr-2 mt-1"></span><span>Rapports journaliers par emails, SMS, Whatsapp</span></li>
          </ul>
          <div>
            <a href="#" class="btn btn-primary">Commencer</a>
          </div>
        </div>
      </div>
    </div>
  </div>
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
                  <img src="{{ asset('assets/images/person_4-min.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="author">
                  <cite class="d-block mb-0">Samba Christ</cite>
                  <span>PDG, Sokisa.</span>
                </div>
              </div>
              <blockquote>
                <p>&ldquo;
                  Grâce à Koverae, nous avons considérablement amélioré la visibilité de notre inventaire et avons pu mieux gérer nos ventes et nos fournisseurs. Nous avons également été en mesure d'optimiser nos processus de ressources humaines avec les fonctionnalités de gestion de la paie et des absences. Nous sommes très satisfaits de la solution offerte par cette startup de logiciel.
                  &rdquo;</p>
              </blockquote>
            </div>

            <div class="testimonial-item">
              <div class="d-flex align-items-center mb-4">
                <div class="photo mr-3">
                  <img src="{{ asset('assets/images/person_1-min.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="author">
                  <cite class="d-block mb-0">MASSAMBA Judie Brelle</cite>
                  <span>PDG, Marie Reine SARL.</span>
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
                  <span>PDG, Banéo, SA.</span>
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

 <!-- <div class="site-section bg-light" id="blog-section">
  <div class="container">
    <div class="row">
      <div class="col-7 mb-4 position-relative text-center mx-auto">
        <h2 class="font-weight-bold text-center">Our Blog Posts</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>

    </div>
    <div class="row">


      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
        <div class="blog_entry">
          <a href="#"><img src="{{ asset('assets/images/img_h_3-min.png')}}" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <h3><a href="#">Far far away, behind the word mountains</a></h3>
            <span class="date">April 25, 2019</span>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p class="more"><a href="#">Continue reading...</a></p>
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
            <p class="more"><a href="#">Continue reading...</a></p>
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
            <p class="more"><a href="#">Continue reading...</a></p>
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
</div> -->

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
