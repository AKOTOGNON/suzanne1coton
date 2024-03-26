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
            <h1>Liste des paysans</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>prenom</th>
                        <th>Téléphone</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paysans as $paysan)
                    <tr>
                        <td>{{ $paysan->nom }}</td>
                        <td>{{ $paysan->prenom }}</td>
                        <td>{{ $paysan->numero}}</td>
                        <td>
                            <a href="{{ route('admin.paysans.edit', $paysan->id) }}" class="edit">
                                <button class="btn btn-primary">modifier</button>
                            </a>
                              <form action="{{ route('admin.paysans.destroy', $paysan->id) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce paysan ?')" style="display: inline-block;">
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
    </div>
</div>
</body>
</html>

@endsection
