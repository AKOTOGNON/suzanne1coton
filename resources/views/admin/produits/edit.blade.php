@extends('admin.layouts.template')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Produit</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>
<body>
    <h1>Modifier le Produit</h1>
    <form action="{{ route('admin.produits.update', $produit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-4">

            <label for="nom_produit" class="form-label">Nom du Produit:</label>
            <input type="text" name="nom_produit" id="nom_produit" value="{{ $produit->nom_produit }}" class="form-control">
        </div>
        
        <div class="form-group mb-4">

        <button type="submit" class="btn btn-success">Modifier</button>
        </div>

    </form>
</body>
</html>
@endsection


