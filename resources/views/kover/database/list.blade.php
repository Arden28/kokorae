@extends('layouts.master')

@section('page_title', "Vos entreprises")

@section('styles')
    <style>
        .primary{
            background-color: #026469;
            color: #ffffff;
        }
        .primary:hover{
            color: #ffffff;
            background-color: #03565b;
        }
    </style>
@endsection

@section('content')
<!-- Database List -->
<main style="margin-top: 55px; margin-bottom: 105px; height: 400px;">
    <div class="container mb128 koverae-database-manager">
        <div class="d-flex align-items-center justify-content-between flex-wrap py-3">
            <h5 class="mt-2 font-weight-bold">
                Entrerpises
            </h5>
            <a href="#" class="btn primary font-weight-bold">
                Créer
            </a>
        </div>
        <table class="table table-responsive" style="background-color: rgb(240, 235, 235);">
            <thead>
              <tr>
                <th scope="col">Entreprise</th>
                <th scope="col">Session ouverte sur 7 jours</th>
                <th scope="col">Session ouverte depuis plus de 7 jours</th>
                <th scope="col">Rapport fiscal</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Banéo</th>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>
                    <a href="" class="btn primary font-weight-bold">
                        Se Connecter
                    </a>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
</main>
@endsection
