<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduitController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // récupérer l'utilisateur connecté

        $produits = Produit::where('user_id', $user->id)->get(); // Filtrer par l'ID utilisateur
        return view('admin.produits.index', compact('produits'));
    }


    public function create()
    {

        return view('admin.produits.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nom_produit' => 'required|unique:produits,nom_produit,NULL,id,user_id,' . Auth::id(),
        ]);

        Produit::create([
            'nom_produit' => $request->nom_produit,
            'user_id' => Auth::id(), // Récupérer l'utilisateur authentifié
        ]);

         return redirect()->route('admin.produits.index');
    }

   public function show($id)
    {
        $produit = Produit::findOrFail($id);

        return view('admin.produits.show', compact('produit'));
    }

    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('admin.produits.edit', compact('produit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_produit' => 'required',
        ]);

        $produit = Produit::findOrFail($id);
        $produit->update([
            'nom_produit' => $request->nom_produit,
        ]);

        return redirect()->route('admin.produits.index')
            ->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->route('admin.produits.index')
            ->with('success', 'Produit supprimé avec succès.');
    }
}
