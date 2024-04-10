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
    <h1>Liste des Paiements</h1>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>

                <th scope="col">Paysan</th>
                <th scope="col">Dette</th>
                <th scope="col">Vente</th>
                <th scope="col">Montant Recu</th>
                <th scope="col">Date Paiement</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payements as $payement)
            <tr>
                <th scope="row">{{ $payement->id }}</th>
                <td>{{ $paysan->nom }}</td>
                <td>{{ $paysan->dette->redevable}}</td>
                <td>{{ $paysan->user->name }}</td>
                <td>{{ $paysan->vente->solde }}</td>

                <!-- Calcul automatique du montant à recevoir en soustrayant la dette du solde -->
                <td>{{ max(0, $paysan->dette->redevable - $paysan->solde) }}</td>

                <td>
                    <a href="{{ route('admin.payements.show', $payement->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('admin.payements.edit', $payement->id) }}" class="btn btn-primary">Éditer</a>
                    <form action="{{ route('admin.payements.destroy', $payement->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.payements.create') }}" class="btn btn-success">Nouveau Paiement</a>
</div>
@endsection

