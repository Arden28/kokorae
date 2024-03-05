@extends('layouts.master')

@section('page_title', "Découvrez nos plans abordables adaptés à votre entreprise")

@section('styles')
    <style>
        .caveat{
            font-family: "Caveat", Helvetica;
        }

    </style>
@endsection

@section('content')
<div class="pricing-section" id="pricing">
    <livewire:plan.plan-section />
</div>
@endsection
