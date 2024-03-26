@extends('admin.layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">STOCKS</h4>
                <form action="{{ route('stock.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="form-group mb-4">
                                    <label for="input-quantite_stock">quantite stocks</label>
                                    <input id="input-quantite_stock" type="number" class="form-control input-mask" name="quantite_stock">
                                    {!! $errors->first('quantite_stock','<span class="error">:message</span>') !!}
                                </div>
                                <div class="form-group mb-4">
                                    <label for="input-commune">commune</label>
                                    <input id="input-commune" type="text" class="form-control input-mask" name="commune">
                                    {!! $errors->first('commune','<span class="error">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4 mt-lg-0">
                                <div class="form-group mb-4">
                                    <label for="input-departement">departement</label>
                                    <input id="input-departement" class="form-control input-mask" name="departement">
                                    {!! $errors->first('departement','<span class="error">:message</span>') !!}
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
@endsection

