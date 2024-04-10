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
        // Récupérer toutes les dettes de l'utilisateur connecté
        $dettes = Dette::where('user_id', auth()->id())->get();
        return view('admin.dettes.index', compact('dettes'));
    }

    public function create()
    {
        // Récupérer tous les produits de l'utilisateur connecté
        $produits = Produit::where('user_id', auth()->id())->get();
        // Récupérer tous les paysans de l'utilisateur connecté
        $paysans = Paysan::where('user_id', auth()->id())->get();
        return view('admin.dettes.create', compact('produits', 'paysans'));
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'redevable' => 'required',
            'produit_id' => 'required',
            'paysan_id' => 'required',
            // Autres règles de validation
        ]);

        // Créer une nouvelle dette associée à l'utilisateur connecté, au produit et au paysan
        $dette = new Dette();
        $dette->redevable = $request->redevable;
        $dette->produit_id = $request->produit_id;
        $dette->paysan_id = $request->paysan_id;
        $dette->user_id = auth()->id();
        // Définir d'autres champs de dette à partir des données du formulaire
        $dette->save();

        // Rediriger avec un message de succès
        return redirect()->route('admin.dettes.index')->with('success', 'Dette créée avec succès.');
    }

    public function edit(Dette $dette)
{
    // Vérifier si l'utilisateur connecté est le créateur de la dette, du produit et du paysan
    if ($dette->user_id === auth()->id() && $dette->produit->user_id === auth()->id() && $dette->paysan->user_id === auth()->id()) {
        // L'utilisateur est le créateur, donc affiche le formulaire d'édition de la dette
        $produits = Produit::where('user_id', auth()->id())->get();
        $paysans = Paysan::where('user_id', auth()->id())->get();
        return view('admin.dettes.edit', compact('dette', 'produits', 'paysans'));
    } else {
        // L'utilisateur n'est pas autorisé à modifier cette dette
        abort(403, 'Unauthorized action.');
    }
}

public function update(Request $request, Dette $dette)
{
    // Vérifier si l'utilisateur connecté est le créateur de la dette, du produit et du paysan
    if ($dette->user_id === auth()->id() && $dette->produit->user_id === auth()->id() && $dette->paysan->user_id === auth()->id()) {
        // Valider les données du formulaire
        $request->validate([
            'produit_id' => 'required',
            'paysan_id' => 'required',
            // Autres règles de validation
        ]);

        // Mettre à jour les champs de la dette
        $dette->produit_id = $request->produit_id;
        $dette->paysan_id = $request->paysan_id;
        // Mettre à jour d'autres champs de dette à partir des données du formulaire
        $dette->save();

        // Rediriger avec un message de succès
        return redirect()->route('admin.dettes.index')->with('success', 'Dette mise à jour avec succès.');
    } else {
        // L'utilisateur n'est pas autorisé à modifier cette dette
        abort(403, 'Unauthorized action.');
    }
}

public function destroy(Dette $dette)
{
    // Vérifier si l'utilisateur connecté est le créateur de la dette, du produit et du paysan
    if ($dette->user_id === auth()->id() && $dette->produit->user_id === auth()->id() && $dette->paysan->user_id === auth()->id()) {
        // Supprimer la dette
        $dette->delete();

        // Rediriger avec un message de succès
        return redirect()->route('admin.dettes.index')->with('success', 'Dette supprimée avec succès.');
    } else {
        // L'utilisateur n'est pas autorisé à supprimer cette dette
        abort(403, 'Unauthorized action.');
    }
}

    // Autres méthodes comme show, edit, update, destroy...
}
