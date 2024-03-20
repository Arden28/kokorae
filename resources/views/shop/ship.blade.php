@extends('layouts.master')

@section('page_title', 'Votre panier - Facturation')

@section('styles')
    <style>
        /*  */
        .k_wizard{
            font-size: 16px;
            line-height: 20px;
            padding: 24px 0 24px 0;
        }
        .k_wizard .k_wizard_steplabel.active{
            color: #000000;
            font-weight: 600;
        }
        .k_cart h3{
            font-size: 32px;
            line-height: 35px;
            font-weight: bold;
        }
        @media (max-width: 472px){
        .k_cart h3{
            font-size: 22px;
            line-height: 25px;
        }
        }
        .k_cart .k_cart_product .delete_product{
            font-size: 14px;
            line-height: 21px;
            color: #017E84;
        }
        .k_cart .k_cart_product .quantity{
            width: 112px;
        }
        .go-pay{
            background-color: #026469;
            color: white;
        }
        .go-pay:hover{
            background-color: #03686d;
            color: white;
        }
        .k_cart_summary .card-body-lg{
            border: 1px solid #D8DADA;
        }
        @media(max-width: 992px){
            .k_cart_summary .card-body-lg{
                border: none !important;
                margin-top: 20px !important;
            }
        }
    </style>
@endsection

@section('content')
    <div id="wrap" style="margin-top: 100px;">
        <div class="k_website_sale k_website_sale_checkout container py-2">
            <div class="row position-relative mb32">
                <!-- Breadcrumbs -->
                <div class="col-12 d-none d-lg-block text-muted">
                    <div class="k_wizard d-flex flex-wrap justify-content-between justify-content-md-start my-5 my-sm-3">
                        <div class="d-flex flex-column flex-md-row justify-content-end align-items-md-start justify-content-center">
                            <p class="k_wizard_steplabel text-center mb-0">
                                {{ __('Vérifier la commande') }}
                            </p>
                            <i class="bi bi-chevron-right d-inline-block align-middle"></i>
                            <p class="k_wizard_steplabel active text-center mb-0 disabled">
                                {{ __('Expédition') }}
                            </p>
                            <i class="bi bi-chevron-right d-inline-block align-middle disabled"></i>
                            <p class="k_wizard_steplabel text-center mb-0">
                                {{ __('Paiement') }}
                            </p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('cart.shipping') }}" method="POST" class="d-flex">
                    @csrf
                    <!-- Product List -->
                    <div class="k_cart col-12 col-lg-7 text-black">
                        <div class="col">
                            <h3 class="mb-4">Adresse</h3>
                            <h4 class="mb-1">Facturation</h4>
                            <!-- Billing Adresses -->
                            <div class="container-fluid bg-white p-0" style="margin-top: 85px;">
                                <div class="block">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-lg-12 p-0" data-aos="fade-up" data-aos-delay="200">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                <label class="text-black" for="name">{{ __('Nom(s) & Prénom(s)') }}</label>
                                                <input id="name" type="text" class="form-control" readonly name="name" value="{{ old('name', Auth::user()->name) }}" required autofocus autocomplete="name">
                                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                <label class="text-black" for="lname">Nom de la société</label>
                                                <input type="text" class="form-control" id="society" name="society" value="{{ old('society', Auth::user()->society) }}">
                                                <x-input-error class="mt-2" :messages="$errors->get('society')" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                <label class="text-black" for="email">{{ __('Email') }}</label>
                                                <input id="email" type="email" class="form-control" name="email" required autofocus autocomplete="email" value="{{ old('email', Auth::user()->email) }}">
                                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                <label class="text-black" for="phone">{{ __('Numéro de téléphone') }}</label>
                                                <input id="phone" type="tel" class="form-control" name="phone" required autofocus autocomplete="phone" value="{{ old('phone', Auth::user()->phone) }}">
                                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                <label class="text-black" for="street">{{ __('Rue') }}</label>
                                                <input id="street" type="text" class="form-control" name="street" required autofocus autocomplete="street" value="{{ old('street', Auth::user()->street) }}">
                                                <x-input-error class="mt-2" :messages="$errors->get('street')" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                <label class="text-black" for="lname">{{ __('Ville') }}</label>
                                                <input id="city" type="text" class="form-control" name="city" required autofocus autocomplete="city" value="{{ old('city', Auth::user()->city) }}">
                                                <x-input-error class="mt-2" :messages="$errors->get('city')" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                <label class="text-black" for="zip">{{ __('Code Postal') }}</label>
                                                <input id="zip" type="text" class="form-control" name="zip" required autofocus autocomplete="zip" value="{{ old('zip', Auth::user()->zip) }}">
                                                <x-input-error class="mt-2" :messages="$errors->get('zip')" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                <label class="text-black" for="country">{{ __('Pays') }}</label>
                                                <input id="country" type="text" class="form-control" name="country" required autofocus autocomplete="country" value="{{ old('country', Auth::user()->country) }}">
                                                <x-input-error class="mt-2" :messages="$errors->get('country')" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Summary -->
                    <div class="k_cart_summary offset-xl-1 col-lg-5 col-xl-4 order-2">
                        <div class="card-body-lg p-0 p-lg-4 rounded">
                            <!-- Cart Subtotal -->
                            <div class="d-flex align-items-stretch border-bottom pb-2 gap-3">
                                <div class="flex-grow-1 ml-2 mr-2">
                                    <span>Sous-total</span>
                                </div>
                                <div class="d-flex flex-column align-items-end">
                                    <span>{{ format_currency((convertToInt(Cart::instance('plan')->subtotal) * 80) / 100) }}</span>
                                </div>
                            </div>
                            <!-- Cart Total -->
                            <div class="d-flex align-items-stretch pt-3 mb-4 gap-3 text-black font-weight-bold">
                                <div class="flex-grow-1 ml-2 mr-2">
                                    <span>Total</span>
                                </div>
                                <div class="d-flex flex-column align-items-end">
                                    <span>{{ format_currency((convertToInt(Cart::instance('plan')->total) * 80) / 100) }}</span>
                                </div>
                            </div>
                            <!-- Coupon Input -->
                            <div class="input-group mb-1">
                                <input type="text" class="form-control" placeholder="Code de réduction" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                <button class="btn btn-primary font-weight-bold" type="button">Appliquer</button>
                                </div>
                            </div>
                            <!-- Sales Conditions -->
                            <div class="pt-4 text-black">
                                <h5 class="mb-3 font-weight-bold">Conditions de ventes</h5>
                                VENTES FINALES - Veuillez noter que toutes les ventes d'abonnements Koverae Spark et de services associés sont définitives et non remboursables.
                            </div>
                            <!-- Action Button -->
                            <div class="d-flex flex-column pt-4">
                                <button type="submit" class="btn go-pay w-100 font-weight-bold">Confirmer</button>
                                <div class="d-flex position-relative w-100 justify-content-center align-items-center my-2 opacity-75">
                                    <span>ou</span>
                                </div>
                                <a href="{{ route('cart') }}" class="text-center" style="color: #03686d;">{{ __("Retour au panier") }}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
