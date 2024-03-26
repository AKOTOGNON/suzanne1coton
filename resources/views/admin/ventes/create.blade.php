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
                <h4 class="card-title mb-4">Ventes</h4>

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('admin.ventes.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="form-group mb-4">
                                    <label for="input-quantite_engrais">poids</label>
                                    <input id="input-poids" class="form-control input-mask" name="poids">
                                    {!! $errors->first('poids','<span class="error">:message</span>') !!}
                                </div>
                                <div class="form-group mb-4">
                                    <label for="solde">solde</label>
                                    <input id="input-solde" type="text" class="form-control input-mask" name="solde">
                                    {!! $errors->first('solde','<span class="error">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4 mt-lg-0">
                                <div class="form-group mb-4">
                                    <label for="date_vente">date_vente</label>
                                    <input id="input-date_vente" type="date" class="form-control input-mask" name="date_vente">
                                    {!! $errors->first('date_vente','<span class="error">:message</span>') !!}
                                </div>
                                 <div class="form-group">
                                     <label for="paysan_id">Paysan</label>
                                     <select class="form-control" id="paysan_id" name="paysan_id" required>
                                         @foreach ($paysans as $paysan)
                                         @if ($paysan->user_id === Auth::user()->id)
                                         <option value="{{ $paysan->id }}">{{ $paysan->nom }}</option>
                                         @endif
                                         @endforeach
                                     </select>
                                 </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success form-control input-mask">valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

