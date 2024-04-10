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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Payement</h4>
                <form action="{{ route('admin.payements.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="form-group mb-4">
                                   <label for="paysan_id">Paysan :</label>
                                   <select name="paysan_id" id="paysan_id" class="form-control">
                                       @foreach($paysans as $paysan)
                                       <option value="{{ $paysan->id }}">{{ $paysan->nom }}</option>
                                       @endforeach
                                   </select>

                                    {!! $errors->first('montant_recus','<span class="error">:message</span>') !!}
                                </div>
                                <div class="form-group mb-4">
                                    <label for="dette_id">Dette :</label>
                                    <select name="dette_id" id="dette_id" class="form-control">
                                        @foreach($dettes as $dette)
                                        <option value="{{ $dette->id }}">{{ $dette->redevable }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                            <label for="vente_id">Vente :</label>
                            <select name="vente_id" id="vente_id" class="form-control">
                                @foreach($ventes as $vente)
                                <option value="{{ $vente->id }}">{{ $vente->solde }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label for="montant_recus">Montant Reçu :</label>
                            <input type="text" id="montant_recus" name="montant_recus" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="date_payement">Date du Paiement :</label>
                            <input type="date" id="date_payement" name="date_payement" class="form-control">
                        </div>


                        </div>

                    </div>
                    <button type="submit" class="btn btn-success form-control input-mask">valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

