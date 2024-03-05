@extends('layouts.master')

@section('page_title', 'Erreur de frappe')


@section('content')
    <section id="k_typo_page"  class="k_typo_page h-100 d-flex" data-image="{{ asset('assets/images/people/typo_bg_0.jpg') }}">
        <div class="container d-flex align-items-md-center">
            <div class="k_typo_page_content mt-5 mt-sm-0 mb-md-5 pb-md-5">
                <div class="text-center-xs">
                    <h1 class="display-1 mt-0">
                        Oooh là !!
                    </h1>
                    <h4 class="mb-4">
                        <small>Nous ne trouvons pas</small> <br /> <b>{{ $host }}</b>
                    </h4>
                    <p class="mb-2">
                        Les causes probables sont
                    </p>
                    <ul class="ps-4">
                        <li class="mb-3">
                            <b>Mauvaise </b>URL
                            <br />
                            <b class="small text-muted">Veuillez vérifier l'adresse</b>
                        </li>
                        <li class="mb-3">
                            Domaine <b>expiré</b>
                            <br />
                            <b class="small text-muted">Si vous en êtes le propriétaire, veuillez contacter notre <a href="">équipe de satisfaction client</a></b>
                        </li>
                        <li class="mb-3">
                            Ce domaine n'existe pas encore <a href="" class="mt-4 mb-8 btn" style="background-color: #017E84; color: white"> <b>Enregistrez-le maintenant !</b>
                            </a>
                        </li>
                    </ul>
                    <div class="hr mt-4 mt-5 bg-black-25">
                    <h4 style="padding-top: 16px;">Voulez-vous en savoir plus sur <b>Koverae</b> ? </h4>
                    <p class="small">
                        Koverae est une solution complète pour les entreprises, offrant une suite d'applications intégrées conçues pour automatiser et optimiser les processus commerciaux.
                        Koverae simplifie les opérations et favorise une meilleure efficacité à travers une plateforme unifiée.
                    </p>
                    <a href="https://www.koverae.com" target="_blank" class="btn btn-primary me-2"><b>Notre site web</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/color-thief@2.3.0/dist/color-thief.min.js"></script>
<script>
    // Wait for the window and the document to load
    window.onload = function() {
        // Ensure that ColorThief is globally accessible
        const colorThief = new ColorThief();

        const img = new Image();
        img.crossOrigin = 'Anonymous'; // To handle CORS issues

        // Get the image URL from the data attribute
        const imageUrl = document.getElementById('k_typo_page').getAttribute('data-image');
        img.src = imageUrl;

        img.addEventListener('load', function() {
            // Get the dominant color of the image
            const dominantColor = colorThief.getColor(img);

            // Convert the color to a CSS format (rgb(r, g, b))
            const backgroundColor = `rgb(${dominantColor[0]}, ${dominantColor[1]}, ${dominantColor[2]})`;

            // Apply the background color to the section
            document.getElementById('k_typo_page').style.backgroundColor = backgroundColor;
        });
    };
</script>

@endsection
