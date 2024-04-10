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


                    <h4 class="card-title mb-4">Paysan</h4>
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif


                    <form action="{{ route('admin.paysans.store') }}" method="POST">

                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="">
                            <div class="col-lg-">
                                <div class="row">
                                    <div class="form-group mb-4 col-6">
                                        <label for="input-nom">Nom</label>
                                        <input id="input-nom" type="text" class="form-control  " name="nom">
                                        {!! $errors->first('nom','<span class="error">:message</span>') !!}
                                    </div>
                                    <div class="form-group mb-4 col-6 ">
                                        <label for="input-prenom">Prenom</label>
                                        <input id="input-prenom" type="text" class="form-control " name="prenom">
                                        {!! $errors->first('prenom','<span class="error">:message</span>') !!}
                                    </div>
                                    <div class="form-group mb-4 col-6">
                                        <label for="input-numero">Contact</label>
                                        <input id="input-numero" type="number" class="form-control" name="numero">
                                        {!! $errors->first('numero','<span class="error">:message</span>') !!}
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
