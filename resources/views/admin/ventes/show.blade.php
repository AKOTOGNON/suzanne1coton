@extends('admin.layouts.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Détails de la vente</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Date de la vente :</b> {{ $vente->date_vente }}</li>
                        <li class="list-group-item"><b>Poids :</b> {{ $vente->poids }}</li>
                        <li class="list-group-item"><b>Montant total :</b> {{ $vente->montant_total }}</li>
                        <li class="list-group-item"><b>Paysan :</b> {{ $vente->paysan->nom }}</li>
                        <li class="list-group-item"><b>Créateur :</b> {{ $vente->user->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection

