@extends('layouts.master')

@section('page_title', "Mon compte")

@section('styles')
    <style>
        .k_portal_wrap{
            height: 605px;
        }
        .k_portal_wrap .k_portal_content{
            height: 558px;
            padding: 0 15px 0 15px;
            max-width: 100%;
            min-width: auto;
        }
        .k_portal_wrap .k_portal_content .k_portal_docs{
            height: 320px;
            margin: -8px -4px 0 -4px;
        }
        .k_portal_wrap .k_portal_content .k_portal_docs .k_portal_category{
            height: 116px;
        }
    </style>
@endsection

@section('content')
<div class="k_portal_wrap" id="wrap" style="margin-top: 55px; margin-bottom: 105px;">
    <div class="container mt-12 pt-3 pb-5">
        <div class="wrapper col-12 d-flex flex-wrap justify-content-between align-items-center">
            <h3 class="my-3 font-weight-bold">
                Mon compte
            </h3>
        </div>
        <div id="portal_wrapper_category">

        </div>
        <div class="k_portal_content col-12 col-lg-8 text-black">
            <div class="k_portal_docs row g-2">
                <div class="k_portal_category row g-2 mt-3" id="portal_client_category">
                    <div class="k_portal_index_card col-md-6 order-2">
                        <a href="" class="d-flex justify-content-start gap-2 gap-md-3 align-items-center py-3 pe-2 px-md-3 text-decoration-none text-reset text-bg-light">
                            <div>
                                <span>
                                    Bons de commande
                                </span>
                                <p class="m-0 text-600">
                                    Suivez, visualisez ou payez vos commandes
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
