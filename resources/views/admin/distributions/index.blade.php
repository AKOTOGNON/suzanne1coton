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
    <h1>Liste des distributions</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date distribution</th>
                <th>Nom des Paysans</th>
                <th>Nom du Produit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($distributions as $distribution)
            <tr>
                <td>{{ $distribution->date_distribution }}</td>

                 <td>{{ $distribution->paysan->nom }}</td>
                 <td>{{ $distribution->produit->nom_produit }}</td>



                <td>
                    <a href="{{ route('admin.distributions.show', $distribution) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('admin.distributions.edit', $distribution) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('admin.distributions.destroy', $distribution) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce paysan ?')" style="display: inline-block">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

@endsection
