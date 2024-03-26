<?php

namespace App\Http\Controllers;

use App\Models\Dette;
use App\Models\Paysan;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetteController extends Controller
{
   public function index()
{
    $user = Auth::user();

    // Récupérer les paysans enregistrés par l'utilisateur actuel
    $paysans = $user->paysans()->get();

    // Récupérer les dettes des paysans
    $dettes = Dette::whereIn('paysan_id', $paysans->pluck('id'))->with('paysan', 'produit')->get();

    return view('admin.dettes.index', compact('dettes'));
}



    public function create()
{
    $paysans = Paysan::all();
    $produits = Produit::all();

    return view('admin.dettes.create', compact('paysans', 'produits'));
}

    public function store(Request $request)
    {

        $request->validate([
            'redevable'=>'required',
            'paysan_id' => 'required|exists:paysans,id',
            'produit_id' => 'nullable|exists:produits,id',

        ]);

        Dette::create([
            'redevable'=>$request->redevable,
            'paysan_id'=>$request->paysan_id,
            'produit_id'=>$request->produit_id
        ]);
        return redirect()->route('admin.dettes.index')->with('success', 'Dette créée avec succès.');
    }

    public function show(Dette  $dette,)
    {
         return view('admin.dettes.show', compact('dette'));

    }

      public function edit(Dette $dette)
    {
        $dette = Dette::with('paysan', 'produit')->find($dette->id);

        return view('admin.dettes.edit', compact('dette'));
    }

    public function update( $request, Dette $dette)
    {
        $dette->update($request->validated());

        return Redirect()->route('admin.dettes.index')->with('success', 'Distribution modifiée avec succès!');
    }

     public function destroy(Dette $dette)
    {
        $dette->delete();

        return redirect()->route('admin.dettes.index')->with('success', 'Dette supprimée avec succès.');
    }
}
