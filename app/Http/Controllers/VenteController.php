<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vente;
use App\Models\Paysan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VenteController extends Controller
{
   public function index()
    {
        $user = Auth::user();
        $ventes = $user->ventes()->get(); //  Récupère toutes les ventes de l'utilisateur

        return view('admin.ventes.index', compact('ventes'));
    }
     public function create()
    {
        $user = Auth::user();
        $paysans = $user->paysans()->get(); //
        return view('admin.ventes.create', compact('paysans'));

         }

  public function store(Request $request)
    {
        $request->validate([

            'poids' => 'required',
            'solde' => 'required|numeric',
            'date_vente' => 'required|date',
            'paysan_id' => 'required|exists:paysans,id',
        ]);

        $vente = Vente::create([

            'poids' => $request->poids,
            'solde' => $request->solde,
            'date_vente' => $request->date_vente,
            'paysan_id' => $request->paysan_id,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('admin.ventes.index')->with('success', 'Vente créée avec succès');
    }

    public function show(Vente $vente)
    {


        $vente->user = $vente->user()->first();// Nom du créateur

        return view('admin.ventes.show', compact('vente'));
    }

   public function edit(Vente $vente)
    {
        // Autoriser l'accès uniquement si la vente appartient à l'utilisateur actuel
        if ($vente->user_id != Auth::user()->id) {
            abort(403);
        }

        // Afficher le formulaire de modification
        $paysans = Paysan::all(); // Liste des paysans pour le choix

        return view('admin.ventes.edit', compact('vente', 'paysans'));
    }

     public function update(Request $request, Vente $vente)
    {
        // Autoriser l'accès uniquement si la vente appartient à l'utilisateur actuel
        if ($vente->user_id != Auth::user()->id) {
            abort(403);
        }

        // Validation des données
        $request->validate ([
            'poids' => 'required|numeric',
            'solde' => 'required|numeric',
            'date_vente' => 'required|date',
            'paysan_id' => 'required|exists:paysans,id',
        ]);



        // Mettre à jour la vente
        $vente->update($request->all());

        return redirect()->route('admin.ventes.index')->with('success', 'Vente modifiée avec succès');
    }

    public function destroy(Vente $vente)
    {
        // Autoriser l'accès uniquement si la vente appartient à l'utilisateur actuel
        if ($vente->user_id != Auth::user()->id) {
            abort(403);
        }

        // Supprimer la vente
        $vente->delete();

        return redirect()->route('admin.ventes.index')->with('success', 'Vente supprimée avec succès');
    }
}
