@extends('layouts.master')

@section('page_title', 'Votre panier - Paiement')

@section('styles')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            /* font-weight: bold; */
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
                            <p class="k_wizard_steplabel text-center mb-0 disabled">
                                {{ __('Facturation') }}
                            </p>
                            <i class="bi bi-chevron-right d-inline-block align-middle disabled"></i>
                            <p class="k_wizard_steplabel active text-center mb-0">
                                {{ __('Paiement') }}
                            </p>
                        </div>
                    </div>
                </div>
                <form
                        role="form"
                        action="{{ route('cart.pay.stripe') }}"
                        method="post"
                        class="require-validation d-flex"
                        data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                        id="payment-form">
                    @csrf
                    <!-- Product List -->
                    <div class="k_cart col-12 col-lg-7 text-black">
                        <div class="col">
                            <h3 class="mb-0">Confirmer la commande</h3>
                            <!-- Billing Adresses -->
                            <div class="container-fluid bg-white p-0" style="margin-top: 20px;">
                                <div class="block">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 col-lg-12 p-0" data-aos="fade-up" data-aos-delay="200">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                    <label class="text-black" for="name">{{ __('Nom Complet') }}</label>
                                                    <input type="text" class="form-control  cc-name" id="cc-name" size='4' name="cc-name" autocomplete="cc-name" pattern="[\p{L} \-\.]+" required>
                                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                    </div>
                                                </div>
                                                <div class="col-12 card">
                                                    <div class="form-group">
                                                    <label class="text-black" for="cc-number">{{ __('Numéro de carte') }}</label>
                                                    <input type="text" class="form-control card-number" id="cc-number" name="cc-number" size='20' autocomplete="cc-number" inputmode="numeric" pattern="[\d ]{10,30}" required>
                                                    <x-input-error class="mt-2" :messages="$errors->get('cc-number')" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6 col-lg-4 expiration">
                                                    <div class="form-group">
                                                    <label class="text-black" for="cc-exp-month">{{ __("Mois d'expiration") }}</label>
                                                    <input id="cc-exp-month" class="card-expiry-month" name="cc-exp-month cc-exp-month" autocomplete="cc-exp-month" placeholder="MM" maxlength="5" required>
                                                    <x-input-error class="mt-2" :messages="$errors->get('cc-exp-month')" />
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4 expiration">
                                                    <div class="form-group">
                                                    <label class="text-black" for="cc-exp-year">{{ __("Année d'expiration") }}</label>
                                                    <input id="cc-exp-year" class="card-expiry-year" name="cc-exp-year cc-exp-year" autocomplete="cc-exp-year" placeholder="YYYY" maxlength="5" required>
                                                    <x-input-error class="mt-2" :messages="$errors->get('cc-exp-year')" />
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4 cvc">
                                                    <div class="form-group">
                                                    <label class="text-black" for="cc-csc">{{ __("Cvc") }}</label> <br>
                                                    <input type="text" id="cc-csc" class="card-cvc" placeholder='ex. 311' size='4' name="cc-csc" autocomplete="cc-csc" inputmode="numeric" maxlength="3" required>
                                                    <x-input-error class="mt-2" :messages="$errors->get('cc-csc')" />
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div class='form-row row'>
                                                <div class='col-md-12 error form-group hide'>
                                                    <div class='alert-danger alert'>Please correct the errors and try
                                                        again.</div>
                                                </div>
                                            </div> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Summary -->
                    <div class="k_cart_summary offset-xl-1 col-lg-5 col-xl-4 order-2">
                        <div class="card-body-lg p-0 p-lg-4 rounded text-black">
                            @foreach (Cart::instance('plan')->content() as $cart_item)
                            <!-- Product -->
                            <div class="k_cart_product d-flex align-items-stretch border-bottom pb-2 gap-3">
                                <!-- Product Image -->
                                <div>
                                    <img src="{{ asset('assets/images/default/product.png') }}" height="64px" alt="" class="img k_image_64_max rounded">
                                </div>
                                <div class="flex-grow-1 ml-2 mr-2">
                                    <h6 class="d-inline algn-top cursor-pointer">
                                        {{ $cart_item->qty }} x {{ $cart_item->name }}
                                    </h6>
                                </div>
                                @php
                                    $plan_price = $cart_item->price;
                                @endphp
                                <!-- Product Price -->
                                <div class="d-flex flex-column align-items-end">
                                    <div class="mb-0 h6 text-end">
                                        <span>{{ format_currency($cart_item->price) }}</span>
                                        {{-- <div>
                                            <span>par an</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Product Discount -->
                            <div class="k_cart_product d-flex border-bottom align-items-stretch pt-2 pb-2 mb-2 gap-3">
                                <!-- Product Image -->
                                <div>
                                    <img src="{{ asset('assets/images/app-icons/discount.png') }}" height="64px" width="64xp" alt="" class="img k_image_64_max rounded">
                                </div>
                                <div class="flex-grow-1 ml-2 mr-2">
                                    <h6 class="d-inline algn-top cursor-pointer">
                                        1 x Plan Spark Remise
                                    </h6>
                                </div>
                                <!-- Product Price -->
                                <div class="d-flex flex-column align-items-end">
                                    <div class="mb-0 text-end">
                                        <span>- {{ format_currency(($plan_price * 20) / 100) }}</span>
                                    </div>
                                </div>
                            </div>
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
                            <!-- Sales Conditions -->
                            <div class="pt-4 text-black">
                                <h5 class="mb-3 font-weight-bold">Conditions de ventes</h5>
                                VENTES FINALES - Veuillez noter que toutes les ventes d'abonnements Koverae Spark et de services associés sont définitives et non remboursables.
                            </div>
                            <!-- Action Button -->
                            <div class="d-flex flex-column pt-4">
                                <button type="submit" class="btn go-pay w-100 font-weight-bold">Payer maintenant</button>
                                <div class="d-flex position-relative w-100 justify-content-center align-items-center my-2 opacity-75">
                                    <span>ou</span>
                                </div>
                                <a href="#" class="text-center" style="color: #03686d;">{{ __("Retourner au panier") }}</a>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">

$(function() {

    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/

    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });

        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }

    });

    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

});
</script>
@endsection
