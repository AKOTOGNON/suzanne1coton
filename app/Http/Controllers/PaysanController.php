<?php

namespace App\Http\Controllers;

use App\Models\Carnet;
use App\Models\Paysan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;

class PaysanController extends Controller
{
     public function index()
    {
       $user = Auth::user(); // Récupérer l'utilisateur actuel
    $paysans = Paysan::where('user_id', $user->id)->get(); // Filtrer par l'ID utilisateur
        return view('admin.paysans.index', compact('paysans'));
    }



    public function create()
    {

        return view('admin.paysans.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            // Utilisez la règle unique sur la combinaison du numero
            'numero' => 'required|unique:paysans,numero,NULL,id,numero,' . $request->input('numero'),



        ]);

         // Recherche d'un paysan existant avec les mêmes coordonnées
    $existingPaysan = Paysan::where('nom', $request->nom)
                            ->where('prenom', $request->prenom)
                            ->where('numero', $request->numero)
                            ->first();

    // Si le paysan existe déjà, rediriger avec un message d'erreur
    if ($existingPaysan) {
        return redirect()->back()->with('error', 'Cet Paysan existe déjà.');
    }


        Paysan::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'numero'=>$request->numero,
            'user_id'=>$request->user_id,
        ]);
        //Récupétation de l'utilisateur enregistré freshement
        $numero = $request->numero;
        $user = Paysan::where('numero', $numero)->first();

        if($user){
            $paysan= Paysan::find($user['id']);
             $id=$paysan['id'];
            $number_carnet = rand(012,199);
            $year=date('Y');
            $carnet =new  Carnet();
            $carnet->paysan_id = $id;
            $carnet->number_carnet= $number_carnet;
            $carnet->annee = $year;
            $carnet->save();

        }
        return redirect()->route('admin.paysans.index');


    }

     public function edit(Paysan $paysan)
{
    return view('admin.paysans.edit', compact('paysan'));
}
    public function show(Paysan $paysan)
{
    return view('admin.paysans.show', compact('paysan'));
}

    public function update(Request $request, Paysan $paysan)
{
    $paysan->update($request->all());

    return redirect()->route('admin.paysans.index');
}

public function destroy(Paysan $paysan)
{
    $paysan->carnets()->delete();
    $paysan->delete();
    return redirect()->route('admin.paysans.index')->with('success', 'Paysan supprimé avec succès.');
}
}
