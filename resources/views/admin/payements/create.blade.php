@extends('admin.layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Payement</h4>
                <form action="{{ route('payement.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="form-group mb-4">
                                    <label for="input-montant_recus">montant recu</label>
                                    <input id="input-montant_recus" type="text" class="form-control input-mask" name="montant_recus">
                                    {!! $errors->first('montant_recus','<span class="error">:message</span>') !!}
                                </div>
                                <div class="form-group mb-4">
                                    <label for="input-date_payement">date payement</label>
                                    <input id="input-date_payement" type="date" class="form-control input-mask" name="date_payement">
                                    {!! $errors->first('date_payement','<span class="error">:message</span>') !!}
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

