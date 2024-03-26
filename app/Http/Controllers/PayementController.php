<?php

namespace App\Http\Controllers;

use App\Models\Payement;
use Illuminate\Http\Request;

class PayementController extends Controller
{
    public function index()
    {
        $payements = Payement::all();
        return view('admin.listePayement.', compact('payements'));
    }


    public function create()
    {
        // Méthode pour afficher le formulaire de création
        return view('admin.createPayements');
    }

    public function store(Request $request)
    {
        $request->validate([
            'montant-recus'=>'required',
            'date_payement'=>'required',

        ]);
        Payement::create([
            'montant_recus'=>$request->montant_recus,
            'date_payement'=>$request->date_payement,


        ]);




    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
