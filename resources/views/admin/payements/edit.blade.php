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

<form action="{{ route('admin.payements.update', $payement->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="paysan_id">Paysan :</label>
        <select name="paysan_id" id="paysan_id" class="form-control">
            @foreach($paysans as $paysan)
            <option value="{{ $paysan->id }}" {{ $paysan->id == $payement->paysan_id ? 'selected' : '' }}>{{ $paysan->nom }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="dette_id">Dette :</label>
        <select name="dette_id" id="dette_id" class="form-control">
            @foreach($dettes as $dette)
            <option value="{{ $dette->id }}" {{ $dette->id == $payement->dette_id ? 'selected' : '' }}>{{ $dette->montant }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="vente_id">Vente :</label>
        <select name="vente_id" id="vente_id" class="form-control">
            @foreach($ventes as $vente)
            <option value="{{ $vente->id }}" {{ $vente->id == $payement->vente_id ? 'selected' : '' }}>{{ $vente->description }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="montant_recus">Montant Reçu :</label>
        <input type="text" id="montant_recus" name="montant_recus" value="{{ $payement->montant_recus }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="date_payement">Date du Paiement :</label>
        <input type="date" id="date_payement" name="date_payement" value="{{ $payement->date_payement }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour Paiement</button>
</form>
@endsection

