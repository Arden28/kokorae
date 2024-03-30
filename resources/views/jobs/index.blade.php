@extends('layouts.master')

@section('page_title', "Nos offres d'emplois")

@section('styles')
    <style>
        .job_group{
            padding: 48px 0 16px 0;
            margin: 0 -15px 0 -15px;
        }
    </style>
@endsection

@section('content')
<!-- Home Page Banner -->
<div class="hero-ban overlay pb-6 mb-3" id="hero" >
    <div class="container">
        <div class="intro-group row h-auto pt-8 text-center">
            <!-- Texte Gauche -->
            <div class="intro col-lg-12 col-md-12 col-sm-12">
                <h1 class="text-black mb-4" data-aos="fade-up" data-aos-delay="100">
                    Rejoignez l'Aventure Koverae
                </h1>
            </div>

        </div>

    </div>
</div>

<!-- Jobs Offers -->
<section class="hr_section">
    <!-- Nvabar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand font-weight-bold" href="#">{{ __("Nos Offres d'emploi") }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('Tous les départements') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">{{ __('Administration') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Ventes') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Marketing') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Recherche & Développement') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Finance') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Stages') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('Tous les bureaux') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">{{ __('Nairobi, Kenya') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Brazzaville, Congo') }}</a>
                            <a class="dropdown-item" href="#">{{ __('A distance') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('Tous les pays') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">{{ __('République du Congo') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Kenya') }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row job_group pl-2 pr-2 m-3">
        <div class="col-lg-8">
            @foreach ($jobs as $job)
            <div class="card card-body p-4 mb-3">
                <div class="mt0 d-flex justify-content-between align-items-center">
                    <h3>{{ $job->name }}</h3>
                </div>
                <h5 class="text-reset mb-4">{{ $job->available_jobs }} postes disponibles</h5>
                <div class="k_job_infos">
                    <div class="d-flex align-items-baseline gap-1">
                        <strong><i class="bi bi-geo-alt-fill mr-3"></i> <span>{{ $job->location }}</span></strong>
                    </div>
                    <div class="d-flex align-items-baseline gap-1">
                        <strong><i class="bi bi-diagram-3 mr-3"></i> <span>{{ $job->department }}</span></strong>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="col-lg-3">
            <!-- A propos -->
            <div class="col-sm-6 col-lg-12 align-items-center pb-4">
                <img src="{{ asset("assets/images/img_h_5-min.jpg") }}" height="200px" alt="" class="rounded shadow mb-3">
                <h5>Obtenez plus de nous</h5>
                <p>Ce que nous sommes, ce que nous faisons.</p>
                {{-- <a href="{{ route('about') }}" class="btn btn-outline-primary" style="border: 1px solid #017E84;">En savoir plus</a> --}}
            </div>
            <!-- Instagram -->
            <div class="col-sm-6 col-lg-12 d-flex align-items-center pb-40">
                <img src="{{ asset('assets/images/Instagram_icon.png') }}" alt="" class="me-3" width="50px" height="50px">
                <span class="ml-1 h6">Suivez-nous sur Instagram: <a href="https://www.instagram.com/koverae_/" target="__blank" class="text-decoration-none">@koverae_</a></span>
            </div>
            <!-- LinkedIn -->
            <div class="col-sm-6 col-lg-12 d-flex align-items-center pb-40 mt-4">
                <img src="{{ asset('assets/images/linkedin.png') }}" alt="" class="me-3" width="50px" height="50px">
                <span class="ml-1 h6">Rejoignez notre page LinkedIn: <a href="https://www.instagram.com/koverae_/" target="__blank" class="text-decoration-none">#koverae</a></span>
            </div>
        </div>
    </div>
</section>
@endsection
