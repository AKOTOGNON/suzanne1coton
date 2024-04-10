<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\Departement;
use App\Models\Produit;
use App\Models\StockAdministrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockAdministrateurController extends Controller
{
    public function index()
    {
        // Filtrer les stocks pour l'utilisateur actuellement authentifié
        $stockadministrateurs = StockAdministrateur::where('user_id', Auth::id())->with('produit')->get();

        return view('admin.stockadministrateurs.index', compact('stockadministrateurs'));
    }

    public function create()
    {
        $communes = Commune::all();
        $departements = Departement::all();
        // Récupérer tous les produits de l'utilisateur connecté
        $produits = Produit::where('user_id', auth()->id())->get();
        return view('admin.stockadministrateurs.create', compact('produits', 'departements', 'communes'));
    }

    public function store(Request $request)
    {
        // Validation de base pour s'assurer qu'un produit est sélectionné
        $request->validate([
            'quantite' => 'required',
            'commune' => 'required',
            'departement' => 'required',
            'produit_id' => 'required|integer|exists:produits,id',
        ]);

        // Créer un nouveau stock avec association utilisateur
        StockAdministrateur::create([
            'quantite' => $request->quantite,
            'commune' => $request->commune,
            'departement' => $request->departement,
            'produit_id' => $request->produit_id,
            'user_id' => Auth::user()->id, // Recuperer l'utilisateur authentifier
        ]);

        return redirect()->route('admin.stockadministrateurs.index')
            ->with('success', 'Stock créé avec succès!');
    }

    public function edit($id)
    {
        $stockadministrateur = StockAdministrateur::where('user_id', Auth::id())
            ->with('produit')
            ->findOrFail($id);

        $produits = Produit::all(); // permet de récupérer tous les produits du modèle Produit et de les stocker dans la variable

        return view('admin.stockadministrateurs.edit', compact('stockadministrateur', 'produits'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'quantite' => 'required',
            'commune' => 'required',
            'departement' => 'required',
            'produit_id' => 'required|integer|exists:produits,id',
        ]);

        $stockadministrateur = StockAdministrateur::where('user_id', Auth::id())->findOrFail($id);
        $stockadministrateur->quantite = $request->quantite;
        $stockadministrateur->commune = $request->commune;
        $stockadministrateur->departement = $request->departement;
        $stockadministrateur->produit_id = $request->produit_id;
        $stockadministrateur->save();

        return redirect()->route('admin.stockadministrateurs.index')
            ->with('success', 'Stock mis à jour avec succès!');
    }

    public function destroy($id)
    {
        $stockadministrateur = StockAdministrateur::where('user_id', Auth::id())->findOrFail($id);

        $stockadministrateur->delete();

        return redirect()->route('admin.stockadministrateurs.index')
            ->with('success', 'Stock supprimé avec succès!');
    }
}
