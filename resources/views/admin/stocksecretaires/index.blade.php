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
                <h1>Liste des produits</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th>quantite stock</th>
                            <th>nom du produit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stocksecretaires as $stocksecretaire)


                        <tr>
                            <td>{{ $stocksecretaire->quantite }}</td>
                            <td>{{ $stocksecretaire->produit->nom_produit }}</td>





                            <td>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

@endsection

