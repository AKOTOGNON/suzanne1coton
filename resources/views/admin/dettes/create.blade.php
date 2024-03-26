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
                <h4 class="card-title mb-4">Dette</h4>
                <form action="{{ route('admin.dettes.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="form-group mb-4">
                                    <label for="input-redevable">redevable</label>
                                    <input id="input-redevable" type="text" class="form-control input-mask" name="redevable">
                                    {!! $errors->first('redevable','<span class="error">:message</span>') !!}
                                </div>

                                <div class="form-group">
                                    <label for="paysan_id">Paysan</label>
                                    <select id="paysan_id" class="form-control" name="paysan_id" required>
                                        <option value="">Choisir un paysan</option>
                                        @foreach($paysans as $paysan)
                                        <option value="{{ $paysan->id }}">{{ $paysan->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                 <div class="form-group">
                                     <label for="produit_id">Produit</label>
                                     <select id="produit_id" class="form-control" name="produit_id" required>
                                         <option value="">Choisir un produit</option>
                                         @foreach($produits as $produit)
                                         <option value="{{ $produit->id }}">{{ $produit->nom_produit}}</option>
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

