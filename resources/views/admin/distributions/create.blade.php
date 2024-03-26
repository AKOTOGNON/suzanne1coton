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
                    <h4 class="card-title mb-4">Distribution</h4>
                    <form action="{{ route('admin.distributions.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="form-group mb-4">
                                        <label for="input-date_distribution">date distribution</label>
                                        <input id="input-date_distribution" type="date" class="form-control input-mask" name="date_distribution">
                                        {!! $errors->first('date_distribution','<span class="error">:message</span>') !!}
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

                                    <div class="form-group">
                                        <label for="produit_id">Produit</label>
                                        <select class="form-control" id="produit_id" name="produit_id" required>
                                            @foreach ($produits as $produit)
                                            @if ($produit->user_id === Auth::user()->id)
                                            <option value="{{ $produit->id }}">{{ $produit->nom_produit }}</option>
                                            @endif
                                            @endforeach

                                        </select>
                                    </div>

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
</html>

@endsection

