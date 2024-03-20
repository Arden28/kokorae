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
                            <a class="dropdown-item" href="#">{{ __('Développement') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Finance') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Stages') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('Tous les bureaux') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Entrez votre recherche" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">CHercher</button>
            </form>
        </div>
    </nav>
    <div class="row job_group pl-2 pr-2">
        <div class="col-lg-7">
            <div class="card card-body p-4">
                <div class="mt0 d-flex justify-content-between align-items-center">
                    <h3>Développeur Backend Laravel/Livewire</h3>
                </div>
                <p>

                </p>
            </div>
        </div>
    </div>
</section>
@endsection
