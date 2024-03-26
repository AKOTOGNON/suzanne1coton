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
        <h1>Détails de la dette</h1>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="date_distribution">Date dette</label>
                    <input type="text" class="form-control" id="date_distribution" name="date_distribution" value="{{ $dette->redevable }}" disabled>
                </div>
                <div class="form-group">
                    <label for="paysan">Paysan</label>
                    <input type="text" class="form-control" id="paysan" name="paysan" value="{{ $dette->paysan->nom }}" disabled>
                </div>
                <div class="form-group">
                    <label for="produit">Produit</label>
                    <input type="text" class="form-control" id="produit" name="produit" value="{{ $dette->produit->nom_produit }}" disabled>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.dettes.edit', $dette) }}" class="btn btn-warning">Modifier</a>
        <a href="{{ route('admin.dettes.index') }}" class="btn btn-secondary">Retour</a>
    </div>

</body>
</html>
@endsection

