<?php

namespace App\Http\Controllers;

use App\Models\StockAdministrateur;
use App\Models\StockSecretaire;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockSecretaireController extends Controller
{

    public function index()
    {
        // Récupérer la commune du secrétaire connecté
        $commune = Auth::user()->commune;

        // Filtrer les stocks pour la commune du secrétaire actuellement authentifié
        $stocksecretaires = StockAdministrateur::where('commune', $commune)->with('produit')->get();

        return view('admin.stocksecretaires.index', compact('stocksecretaires'));
    }

    public function store(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'quantite' => 'required|integer',
            'produit_id' => 'required',
            // Ajoutez ici d'autres règles de validation si nécessaire
        ]);

        // Créer un nouveau stock pour la commune du secrétaire connecté
        StockAdministrateur::create([
            'quantite' => $request->quantite,
            'produit_id' => $request->produit_id,
            'commune' => Auth::user()->commune,
            // Ajoutez ici d'autres champs du stock si nécessaire
        ]);

        // Rediriger l'utilisateur après la création du stock
        return redirect()->route('admin.stocksecretaires.index')->with('success', 'Stock créé avec succès!');
    }
}
