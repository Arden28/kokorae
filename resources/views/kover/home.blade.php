@extends('layouts.master')

@section('page_title', "Mon compte")

@section('styles')
    <style>
        .k_portal_wrap{
            display: block;
        }
        .k_portal_wrap .k_portal_content{
            height: 558px;
            padding: 0 15px 0 15px;
            /* max-width: 100%; */
            min-width: auto;
        }
        .k_portal_wrap .k_portal_content .k_portal_docs{
            height: 320px;
            margin: -8px -4px 0 -4px;
        }
        .k_portal_wrap .k_portal_content .k_portal_docs .k_portal_category{
            height: auto;
            margin: 16px 4px 0 4px;
            padding: 0 4px 0 4px;
            min-height: auto;
            max-width: 100%;
            min-width: auto;
        }
        .k_portal_wrap .k_portal_content .k_portal_docs .k_portal_category .k_portal_index_card{
            height: 108px;
            width: 362px;
            margin: 8px 0 0 0;
            padding: 0 4px 0 4px;
            min-height: auto;
            max-width: 100%;
            min-width: auto;
        }
        .k_portal_wrap .k_portal_content .k_portal_docs .k_portal_category .k_portal_index_card a{
            background-color: #f9f9f9;
            border-radius: 15px;
            width: 100%;
            height: 108px;
        }
        a .primary{
            color: #026469;
        }
        @media (max-width: 768px){
            .k_portal_content{
                width: 100%;
            }

        }
    </style>
@endsection

@section('content')
<div class="k_portal_wrap" id="wrap" style="margin-top: 55px;">
    <div class="container-fluid mt-12 pt-3 pb-5">
        <div class="wrapper col-12 d-flex flex-wrap justify-content-between align-items-center">
            <h3 class="my-3 font-weight-bold">
                Mon compte
            </h3>
            <img src="{{ asset('assets/images/logo/logo-1.png')}}" height="30px" alt="" class=" cursor-pointer k_portal_contact_img d-md-none divide-y-2 rounded k_object_fit_cover">
        </div>
        <div id="portal_wrapper_category">

        </div>
        <div class="row">
            <!-- Portal Content -->
            <div class="k_portal_content col-12 col-lg-8 text-black">
                <div class="k_portal_docs row g-2 mb-sm-4">
                    <div class="k_portal_category w-100 row g-2 mt-3" id="portal_client_category">
                        <!-- Invoices & Bills -->
                        <div class="k_portal_index_card col-12 col-md-6">
                            <a href="" class="d-flex justify-content-start gap-2 gap-md-3 align-items-center py-3 pe-2 px-md-3 text-decoration-none text-reset text-bg-light">
                                <img src="" width="64px" height="64px" class="bg-slate-100 mr-3" alt="">
                                <div>
                                    <span class="font-weight-bold">
                                        {{ __('Vos factures') }}
                                    </span>
                                    <p class="m-0 text-600">
                                        {{ __('Suivez, télécharger ou payez vos factures') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                        <!-- Orders -->
                        <div class="k_portal_index_card col-12 col-md-6">
                            <a href="" class="d-flex justify-content-start gap-2 gap-md-3 align-items-center py-3 pe-2 px-md-3 text-decoration-none text-reset text-bg-light">
                                <img src="" width="64px" height="64px" class="bg-slate-100 mr-3" alt="">
                                <div>
                                    <span class="font-weight-bold">
                                        {{ __('Bons de commande') }}
                                    </span>
                                    <p class="m-0 text-600">
                                        {{ __('Suivez, visualisez ou payez vos commandes') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- -->
                    <div class="k_portal_category w-100 row g-2 mt-3" id="portal_client_category">
                        <!-- Connexion & Sécurité -->
                        <div class="k_portal_index_card col-12 col-md-6">
                            <a href="" class="d-flex justify-content-start gap-2 gap-md-3 align-items-center py-3 pe-2 px-md-3 text-decoration-none text-reset text-bg-light">
                                <img src="" width="64px" height="64px" class="bg-slate-100 mr-3" alt="">
                                <div>
                                    <span class="font-weight-bold">
                                        {{ __('Connexion & Sécurité') }}
                                    </span>
                                    <p class="m-0 text-600">
                                        {{ __('Configuer vos paramètres de connexion') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                        <!-- Adresses -->
                        <div class="k_portal_index_card col-12 col-md-6">
                            <a href="" class="d-flex justify-content-start gap-2 gap-md-3 align-items-center py-3 pe-2 px-md-3 text-decoration-none text-reset text-bg-light">
                                <img src="" width="64px" height="64px" class="bg-slate-100 mr-3" alt="">
                                <div>
                                    <span class="font-weight-bold">
                                        {{ __('Adresses') }}
                                    </span>
                                    <p class="m-0 text-600">
                                        {{ __('Ajoutez, supprimer ou modifiez vos adresses') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kover Info -->
            <div class="kover-info d-lg-flex justify-content-end d-none col-lg-4 text-black">
                <div class="mt-3">
                    <div class="d-flex justify-content-start align-items-center gap-3 mb-4">
                        <img src="{{ asset('assets/images/logo/logo-1.png')}}" height="30px" alt="" class="k_portal_contact_img rounded k_object_fit_cover">
                        <div class="ml-3">
                            <h3 class="mb-0 font-weight-normal">
                                {{ Auth::user()->name }}
                            </h3>
                        </div>
                    </div>
                    <!-- Adresse -->
                    <div class="d-flex align-items-baseline gap-1">
                        <i class="bi bi-geo-alt-fill mr-3"></i>
                        <div class="d-block w-100 lh-sm">
                            {{Auth::user()->street }}, {{ Auth::user()->city }}, <br> {{ Auth::user()->country }}
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="d-flex align-items-center gap-1">
                        <i class="bi bi-envelope-fill"></i>
                        <span class="text-break ml-3">{{ Auth::user()->email }}</span>
                    </div>
                    <!-- Tel -->
                    <div class="d-flex align-items-center gap-1 mb-3">
                        <i class="bi bi-telephone-fill"></i>
                        <span class="text-break ml-3">{{ Auth::user()->phone }}</span>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="primary text-decoration-none p-0 mt-3" style="color: #026469;">
                        <i class="bi bi-pencil-square"></i> {{ __('Modifier vos informations') }}
                    </a>

                    <div class="k_portal_my_security mt-3">
                        <h4>{{ __('Liens Utiles') }}</h4>
                        <a href="#" class="primary" style="color: #026469;">
                            Mon tableau de bord Business
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
