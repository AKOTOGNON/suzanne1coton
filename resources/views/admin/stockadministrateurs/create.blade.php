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
                <h4 class="card-title mb-4">STOCKS</h4>
                <form action="{{ route('admin.stockadministrateurs.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="form-group mb-4">
                                    <label for="input-quantite">quantite</label>
                                    <input id="input-quantite" type="text" class="form-control input-mask" name="quantite">
                                    {!! $errors->first('quantite','<span class="error">:message</span>') !!}
                                </div>


                              <div class="col-lg-6">
                                  <div class="mt-4 mt-lg-0">
                                      <div class="form-group mb-4">
                                          <label for="departement" class="form-label">votre departement</label>
                                          <select name="departement" id="departement" class="form-select">
                                              @foreach ( $departements as $departement )
                                              <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                                              @endforeach
                                          </select>
                                      </div>

                                      <div class="form-group mb-4">
                                          <label for="comune" class="form-label">votre commune</label>

                                          <select id="communes" name="commune" class="form-select">

                                              <option value="">Communes</option>
                                          </select>

                                      </div>


                                <div class="form-group mb-4">
                                    <label for="input-produit">Produit</label>
                                    <select id="input-produit" class="form-control input-mask" name="produit_id">
                                        @foreach ($produits as $produit)
                                        <option value="{{ $produit->id }}">{{ $produit->nom_produit }}</option>
                                        @endforeach
                                    </select>
                                    {!! $errors->first('produit_id','<span class="error">:message</span>') !!}
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

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#departement').change(function() {
            var departementId = $(this).val();
            $('#communes').empty();
            if (departementId) {
                $.ajax({
                    type: "GET"
                    , url: "{{url('get-communes')}}/" + departementId
                    , success: function(res) {
                        if (res) {
                            $.each(res.communes, function(key, value) {
                                $('#communes').append('<option value="' + value.id + '">' + value.nom + '</option>');
                            });
                        }
                    }
                });
            }
        });
    });

</script>


