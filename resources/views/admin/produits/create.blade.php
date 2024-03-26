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
                <h4 class="card-title mb-4">Produit</h4>
                <form action="{{ route('admin.produits.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="form-group mb-4">

                                    <select name="nom_produit" id="input-nom_produit" type="text" class="form-control input-mask">
                                        <option value="engrais">engrais</option>
                                        <option value="herbicide">herbicide</option>
                                        <option value="insecticide">insecticide</option>
                                        <option value="urree">urree</option>
                                    </select>

                                    {!! $errors->first('nom_produit','<span class="error">:message</span>') !!}
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

