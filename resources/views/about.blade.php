@extends('layouts.master')

@section('page_title', "A propos de nous")


@section('content')
<!-- Home Page Banner -->
<div class="hero-ban overlay pb-6" id="hero" >
    <div class="container">
        <div class="intro-group row h-auto pt-8 text-center">
            <!-- Texte Gauche -->
            <div class="intro col-lg-12 col-md-12 col-sm-12">
                <h1 class="text-black mb-4" data-aos="fade-up" data-aos-delay="100">
                    Osons inventer l'avenir !
                </h1>
            </div>

        </div>

    </div>
</div>

<section class="features-lg">
  <div class="container">

    <div class="row feature align-items-center justify-content-between">
      <div class="col-lg-5 mb-4 mb-lg-0 section-stack" data-aos="fade-up" data-aos-delay="0">
        <img src="{{ asset('assets/images/img-h-16.png')}}" alt="Image" class="img-fluid rounded">
      </div>
      <div class="col-lg-7 section-title" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-title font-weight-bold mb-1 heading" id="first-title">
            Nous sommes une équipe
        </h2>
        <p class="mb-4 text-black">
            Chez <strong>Koverae</strong> aucun problème n’est trop important à résoudre si nous restons avides d’innovation.
            Plus l’idée est grande, mieux c’est. Nous remettons en question le statu quo et prenons des risques pour aider notre communauté à prospérer.
            Notre curiosité et notre passion sont à la base de tout ce que nous faisons et nous encouragent à apprendre de nos erreurs.
        </p>

      </div>

    </div>

  </div>
</section>


<section class="features-lg">
    <div class="container">

      <div class="row feature align-items-center justify-content-between">
        <div class="col-lg-4 mb-4 mb-lg-0 section-stack" data-aos="fade-up" data-aos-delay="0">
          <h4 class="display-6">
            Convient aux petites et grandes entreprises.
          </h4>
        </div>
        <div class="col-lg-7 section-title" data-aos="fade-up" data-aos-delay="100">
          <p class="mb-4 text-black fs3">
            Chez Koverae, notre mission est profondément ancrée dans notre conviction que chaque entreprise, quelle que soit sa taille ou son secteur d'activité, mérite d'avoir accès à des outils de gestion d'entreprise de qualité.
            Nous sommes déterminés à démocratiser cet accès en offrant des solutions puissantes mais simples à utiliser, conçues pour répondre aux besoins spécifiques de chaque entreprise, des startups aux grandes entreprises.
            Nous comprenons que la gestion d'entreprise peut être complexe et fastidieuse, et nous nous efforçons de simplifier ce processus pour nos utilisateurs.
            Nos outils sont conçus pour être intuitifs et conviviaux, afin que nos clients puissent se concentrer sur ce qui compte vraiment : faire croître leur entreprise.
            Nous croyons fermement que la technologie peut être un catalyseur de croissance et de réussite pour chaque entreprise.
            En fournissant des solutions innovantes et efficaces, nous visons à aider nos clients à libérer leur plein potentiel et à réaliser leurs objectifs commerciaux.
          </p>

        </div>

      </div>

    </div>
</section>


<section class="features-lg">
  <div class="container">
    <h2 class="text-title text-center font-weight-bold mb-1 heading" id="first-title">
        Qu'est-ce qui rend <strong>Koverae</strong> si unique ?
    </h2>
    <div class="row feature align-items-center justify-content-between">
        <div class="col-lg-7 section-title" data-aos="fade-up" data-aos-delay="100">
            <p class="mb-4 text-black">
                Koverae se démarque par sa simplicité et sa convivialité. Conçu pour être intuitif, notre logiciel réduit le temps d'apprentissage et les frustrations.
                Mais ce qui rend vraiment Koverae unique, c'est notre capacité à nous adapter à chaque entreprise.
                Nous comprenons que chaque entreprise est unique, c'est pourquoi nos solutions sont hautement personnalisables pour répondre à vos besoins spécifiques.
                L'intégration transparente de notre suite d'applications offre une vue d'ensemble unifiée de vos opérations, vous permettant de prendre des décisions éclairées.
                De plus, nous sommes déterminés à rester à la pointe de l'innovation, en investissant continuellement dans la recherche et le développement pour améliorer nos produits et introduire de nouvelles fonctionnalités.
                Enfin, notre engagement envers les PMEs est au cœur de tout ce que nous faisons.
                Nous comprenons les défis uniques auxquels les petites et moyennes entreprises sont confrontées, et nous nous efforçons de leur fournir des solutions qui les aident à prospérer.
                Chez Koverae, nous sommes là pour simplifier la gestion de votre entreprise et vous permettre de vous concentrer sur ce qui compte vraiment : faire croître votre entreprise.
            </p>

        </div>
        <div class="col-lg-5 mb-4 mb-lg-0 section-stack" data-aos="fade-up" data-aos-delay="0">
            <img src="{{ asset('assets/images/img-h-11.png')}}" alt="Image" class="img-fluid">
        </div>

    </div>

  </div>
</section>
@endsection
