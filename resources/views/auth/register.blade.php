@extends('layouts.master')

@section('page_title', 'Créez un compte Kover')

@section('styles')
<style>

    /* Auth */
    .page-content{
        font-size: 14px;
        line-height: 22px;
        text-decoration: none solid rgb(52, 58, 64);
        word-spacing: 0px;
        background-attachment: fixed;
        background-image: url('../images/background/bg-3.jpg');
        background-repeat: no-repeat;
        height: 100%;
        /* width: auto; */
        /* min-height: 642px; */
        min-width: auto;
    }

    .k_website_login{
            font-size: 14px;
            line-height: 19px;
            height: 520px;
            width: 350px;
            border: 1px solid #ffffff;
            margin: 18px 457px 0 457px;
            padding: 0 0 10px 0;
            min-height: auto;
            max-width: 350px;
        }

        .k_website_login .k_logo{
            /* background-color: #ffffff; */
            background-image: url('../images/logo/logo-1.png');
            background-size: cover;
            background-repeat: no-repeat;
            height: 25px;
            width: auto;
            align-content: center;
            align-items: center;
            margin: 24px 127px 0 127px;
            min-height: auto;
            min-width: auto;
            position: relative;
        }

        .k_website_login .card-body{
            /* height: 451px; */
            width: 348px;
            padding: 15px 15px 15px 15px;
            min-height: auto;
            min-width: auto;
        }
        .k-alert{
            font-size: 12px;
            line-height: 19px;
            text-decoration: none solid rgb(14, 97, 110);
            text-align: center;
            word-spacing: 0px;
            background-color: #D1ECF1;
            color: #0E6163;
            height: 87px;
            width: 318.667px;
            min-width: auto;
            border: 1px solid #B9E3EA;
            margin: 0 0 16px 0;
            padding: 16px 16px 16px 16px;
            position: relative;
        }

        .k_login_form{
            height: 314px;
            width: 318px;
            border-top: 1px solid #E9ECEF;
            margin: 15px 0 0 0;
            padding: 10px 0 0 0;
            max-width: 400px;
            min-width: auto;
        }

        .k_login_form .field-login{
            height: 66px;
            width: 318px;
            margin: 0 0 16px 0;
            min-width: auto;
        }

        .k_login_form .field-password{
            height: 88px;
            width: 318px;
            padding: 8px 0 8px 0;
            display: block;
            min-width: auto;
        }

        .field-password #password{
            /* width: 280px; */
            padding: 6px 12px 6px 12px;
            min-height: auto;
            position: relative;
            min-width: auto;
        }

        .field-password .btn{
            height: 34px;
            width: 39px;
            margin: 0 0 0 -1px;
            padding: 6px 12px 6px 12px;
            background-color: #B9E3EA;
            min-height: auto;
            min-width: auto;
        }
        .konnect-btn .btn, .konnect-btn .btn:hover{
            background-color: #026469;
            color: white;
            font-weight: 600;
            text-rendering: uppercase;
            border: none;
        }
        .konnect-btn .btn:focus, .konnect-btn .btn::after{
            background-color: #033f42;
            color: white;
            font-weight: 600;
            text-rendering: uppercase;
            border: none;
        }
        .k_login_buttons {
            height: 30px;
            width: 318px;
            margin: 0 0 14px 0;
            padding: 16px 0 0 0;
            display: flex; /* Use flex display */
            justify-content: space-between; /* Align items to the left and right */
            align-items: center; /* Vertically center items */
        }

        .k_login_buttons .btn {
            height: 34px;
            width: 318px;
            margin: 5px 0 0 0;
            padding: 6px 12px 6px 12px;
            min-height: auto;
            min-width: auto;
            display: block;
            z-index: 1;
        }
        .k_login_buttons a{
            text-decoration: none;

        }

        .links-container {
            display: flex; /* Use flex display */
            justify-content: space-between; /* Align items to the left and right */
        }

        .k_login_buttons .login-link,
        .k_login_buttons .reset-link {
            color: #026469;
            font-size: 13px;
            text-align: center;
            height: 42px;
            width: 152px;
            margin: 10px 0 0 0;
            min-height: auto;
            cursor: pointer;
        }
        .k_login_buttons .login-link:hover,
        .k_login_buttons .reset-link:hover{
            color: #033f42;
        }
        /* Responsive Styles */
        @media (max-width: 1270px) {
            /* Adjust the max-width and other values as needed */

            .k_website_login {
                width: 80%; /* Make the container width responsive */
                margin: 48px auto 0 auto; /* Center the container horizontally */
            }

            .k_login_form,
            .card-body {
                width: 100%; /* Make form and card body width responsive */
            }

            .k_logo {
                margin: 24px auto 0 auto; /* Center the logo */
            }

            /* Adjust other styles as needed for responsiveness */

            .k_login_buttons .btn {
                width: 100%; /* Make button width responsive */
            }

            .k_login_buttons .login-link,
            .k_login_buttons .reset-link {
                width: 90%; /* Make link width responsive */
                margin: 10px 0; /* Adjust margin for spacing */
            }
        }

</style>
@endsection

@section('content')
    <section id="hero" class="mb-4">
        <div class="k_website_login card-body flex-grow-1 card shadow">
            <span class="k_logo" style="background-image: url('{{ asset('assets/images/logo/logo-1.png')}}'); background-size: cover;"></span>
            <div class="card-body">
                <div class="k-alert alert-info text-center">
                    <p>
                        Accédez à vos instances et gérez-les à partir de ce compte Koverae.
                    </p>
                </div>
                <form method="POST" action="{{ route('register') }}" class="k_login_form">
                    @csrf

                    <div class="mb-3 field-login">
                        <label for="name" class="fom-label">
                            {{ __('Votre nom') }}
                        </label>
                        <input name="name" required class="form-control" type="text" id="name">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-3 field-login">
                        <label for="phone" class="fom-label">
                            {{ __('Votre numéro de téléphone') }}
                        </label>
                        <input name="phone" required class="form-control" type="tel" id="phone">
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div class="col-12 py-2 field-password koverae_password_revear">
                        <label for="password" class="fom-label">
                            {{ __('Mot de passe') }}
                        </label>
                        <input class="form-control" name="password" type="password" id="password"
                            required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        {{-- <button class="btn btn-secondary">
                            <i class="bi bi-eye"></i>
                        </button> --}}
                    </div>
                    <div class="konnect-btn mt-3">
                        <button class="btn float-start col-12">
                            {{ __('ME KONNECTER') }}
                        </button>
                    </div>
                    <div class="k_login_buttons clearfix text-center gap-1 d-grid mb-1 pt-0">

                        <div class="links-container">
                            <a href="{{ route('login') }}" class="login-link">{{ __("Me connecter") }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
