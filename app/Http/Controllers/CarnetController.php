<?php

namespace App\Http\Controllers;

use App\Models\Carnet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarnetController extends Controller
{
     public function index()
    {
        $carnets = Carnet::all();
        return view('admin.listeCarnet', compact('carnets'));
    }

    public function create()
    {
        return view('admin.createCarnet');
    }

     public function store(Request $request)
    {
        $request->validate([
            'annee' => 'required',
            'nbr_hectare' => 'required',
            'number_carnet'=>'number_carnet',
        ]);
        $paysan_id = Auth::user()->paysan->id;

       $carnet = new Carnet([
            'annee' => $request->annee,
            'nbr_hectare' => $request->nbr_hectare,
            'number_carnet' => $request->number_carnet,
            'paysan_id' => Auth::user()->paysan->id,
        ]);
        $carnet->save();



    }

    public function show(Carnet $carnet)
    {
        return view('admin.showCarnet', compact('carnet'));
    }

    public function edit(Carnet $carnet)
    {

    }

    public function update(Request $request, Carnet $carnet)
    {


    }

    public function destroy(Carnet $carnet)
    {

    }
}
