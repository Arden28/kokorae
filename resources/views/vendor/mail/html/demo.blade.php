@extends('layouts.master')

@section('page_title', 'Démo Koverae Cloud')


@section('content')
<div class="row g-0 flex-fill site-section">

    <div class="col-12 col-lg-6 col-xl-6 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url({{ asset('assets/auth-register-3.png')}}); background-size: cover;">
          <div class="d-flex justify-content-center align-items-center h-100 ">
            <div style="background-color: white; padding: 20px; margin: -20px; border-radius: 10px;">
              <h3 class="h3 text-center">
                {{ __("Plus de possibilités avec Koverae") }}
                <br />
              </h3>
              <div class="col-lg-auto align-items-center">
                <ul style="list-style: none">
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    {{ __('Basé dans le cloud, aucune installation requise') }}
                  </li>
                  <li style="margin-top: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    {{ __('Fonctionnalités de sécurité et d\'administration adaptée.') }}
                  </li>
                  <li style="margin-top: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    {{ __('Tranquilité d\'esprit grâce à une assistance 24h/24 et 7j/7') }}
                  </li>
                  <li style="margin-top: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    {{ __('Essaie sans frais pendant 15 jours, ') }} <br>
                    {{ __('     facturation mensuelle ou annuelle à l\'issue de cette période') }}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

    </div>

  <div class="col-12 col-lg-6 col-xl-6 border-top-wide border-primary d-flex flex-column justify-content-center">
    <div class="container container-tight my-5 px-lg-5">
      <div class="text-center mb-4">
            <a href="#" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('assets/images/logo/logo-1.png') }}" height="45px" alt="Koverae Logo"></a>
        </div>
        <h2 class="h3 text-center mb-3" style="font-size: 20px; line-height: 24px;">
            {{ __("Réservez une démo personnalisée pour votre entreprise") }}
            <br />
        </h2>

        <livewire:trial.form />

    </div>
  </div>

</div>
@endsection
