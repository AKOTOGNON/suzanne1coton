<?php

namespace App\Http\Controllers;

use App\Models\Paysan;
use App\Models\Produit;
use App\Models\Distribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DistributionController extends Controller
{
   public function index()
    {
        $user = Auth::user();

        $distributions = Distribution::where('user_id', $user->id)->get(); // Filtrer par user_id

        return view('admin.distributions.index', compact('distributions'));
    }

   public function create()
    {
        // Récupérer tous les produits de l'utilisateur connecté
        $produits = Produit::where('user_id', auth()->id())->get();
        // Récupérer tous les paysans de l'utilisateur connecté
        $paysans = Paysan::where('user_id', auth()->id())->get();
        return view('admin.distributions.create', compact('produits', 'paysans'));
    }

    // **Fonction de stockage:**
    // Valide les données du formulaire
    public function store(Request $request)
    {
         $request->validate([

            'date_distribution' => 'required|date',
            'paysan_id' => 'required|exists:paysans,id',
            'produit_id' => 'required|exists:produits,id',
        ]);

        Distribution::create([
            'date_distribution'=>$request->date_distribution,
            'paysan_id'=>$request->paysan_id,
            'produit_id'=>$request->produit_id,
            'user_id' => Auth::user()->id,

        ]);

        return redirect()->route('admin.distributions.index')->with('success', 'Distribution créée avec succès.');
    }

    public function show(Distribution $distribution)
    {
        return view('admin.distributions.show', compact('distribution'));
    }

    public function edit(Distribution $distribution)
    {
        $paysans = Paysan::all();
        $produits = Produit::all();
        return view('admin.distributions.edit', compact('distribution', 'paysans', 'produits'));
    }

    public function update(Request $request, Distribution $distribution)
    {
        $data = $request->validate([

            'date_distribution' => 'required|date',
            'paysan_id' => 'required|exists:paysans,id',
            'produit_id' => 'required|exists:produits,id',
        ]);

        $distribution->update($data);

        return redirect()->route('admin.distributions.index')->with('success', 'Distribution mise à jour avec succès.');
    }

    public function destroy(Distribution $distribution)
    {
        $distribution->delete();

        return redirect()->route('admin.distributions.index')->with('success', 'Distribution supprimée avec succès.');
    }
}
