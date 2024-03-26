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
                  <form action="{{ route('admin.ventes.update', $vente->id) }}" method="POST">
                      @csrf
                      @method('PUT')

                       <div class="form-group">
                           <label for="solde">Poids</label>
                           <input type="text" name="poids" id="poids" class="form-control" value="{{ old('poids', $vente->poids) }}">
                       </div>
                       <div class="form-group">
                           <label for="solde">solde</label>
                           <input type="number" name="solde" id="solde" class="form-control" value="{{ old('montant_total', $vente->solde) }}">
                       </div>



                      <div class="form-group">
                          <label for="date_vente">Date de la vente</label>
                          <input type="date" name="date_vente" id="date_vente" class="form-control" value="{{ old('date_vente', $vente->date_vente) }}">
                      </div>



                      <div class="form-group">
                          <label for="paysan_id">Paysan</label>
                          <select name="paysan_id" id="paysan_id" class="form-control">
                              @foreach($paysans as $paysan)
                              <option value="{{ $paysan->id }}" {{ $vente->paysan_id == $paysan->id ? 'selected' : '' }}>{{ $paysan->nom }}</option>
                              @endforeach
                          </select>
                      </div>

                      <button type="submit" class="btn btn-primary">Modifier</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</body>
@endsection

