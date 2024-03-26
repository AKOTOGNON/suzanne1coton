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

    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body>

    <div class="container">
        <h1>Détails de la distribution</h1>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>date de la distribution :</b> {{ $distribution->date_distribution }}</li>
                        <li class="list-group-item"><b>nom du paysan :</b> {{ $distribution->paysan->nom }}</li>
                        <li class="list-group-item"><b>nom du produit :</b> {{ $distribution->produit->nom_produit }}</li>
                        <li class="list-group-item"><b>Créateur :</b> {{ $distribution->user->name }}</li>
                    </ul>
                </div>

        </div>
        <a href="{{ route('admin.distributions.edit', $distribution) }}" class="btn btn-warning">Modifier</a>
        <a href="{{ route('admin.distributions.index') }}" class="btn btn-secondary">Retour</a>
    </div>

</body>
</html>
@endsection

