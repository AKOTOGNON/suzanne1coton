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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Modifier la dette</h4>
                    <form action="{{ route('admin.dettes.update', $dette->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="form-group mb-4">
                                        <label for="input-redevable">redevable</label>
                                        <input id="input-redevable" type="text" class="form-control input-mask" name="redevable" value="{{ $dette->redevable }}">
                                        {!! $errors->first('redevable','<span class="error">:message</span>') !!}
                                    </div>
                                     <div class="form-group">
                                         <label for="produit_id">Produit</label>
                                         <input type="text" name="paysan_id" class="form-control" value="{{ $paysan->nom_produit}}" required>
                                     </div>


                                    <div class="form-group">
                                        <label for="produit_id">Produit</label>
                                       <input type="text" name="produit_id" class="form-control" value="{{ $produit->nom_produit}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary form-control input-mask">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection

