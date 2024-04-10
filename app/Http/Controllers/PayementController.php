<?php

namespace App\Http\Controllers;

use App\Models\Dette;
use App\Models\Payement;
use App\Models\Paysan;
use App\Models\Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PayementController extends Controller
{
    // Méthode pour payer chaque paysan en fonction de son solde et de sa dette

    public function index()
    {
        $user = Auth::user();
        // Récupérer l'utilisateur connecté
        $payements = Payement::where('user_id', $user->id)->get();

        // Récupérer les paysans enregistrés par l'utilisateur connecté avec leurs dettes et solde
        $paysans = $user->paysans()->with('dette')->get();

        // Passer les données à la vue pour affichage
        return view('admin.payements.index', compact('paysans'));
    }

    public function create()
    {

        $paysans = Paysan::where('user_id', auth()->id())->get();
        $dettes = Dette::where('user_id', auth()->id())->get();
        $ventes = Vente::where('user_id', auth()->id())->get();

        return view('admin.payements.create', compact('paysans','dettes','ventes'));
    }

    // Stocker un nouveau paiement
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'paysan_id' => 'required|exists:paysans,id',
            'montant_recus' => 'required|numeric|min:0',
            'date_payement' => 'required|date',
        ]);

        // Récupérer le paysan associé au paiement
        $paysan = Paysan::findOrFail($validatedData['paysan_id']);

        // Récupérer la dette du paysan
        $dette = $paysan->dette;

        // Vérifier si le montant de la dette est inférieur ou égal au montant reçu
        if ($dette->montant <= $validatedData['montant_recus']) {
            // Soustraire le montant de la dette au solde du paysan
            $paysan->solde -= $dette->montant;
            $paysan->save();

            // Créer le paiement
            $payement = Payement::create([
                'paysan_id' => $paysan->id,
                'dette_id' => $dette->id,
                'vente_id' => $dette->vente_id, // On suppose que la dette est liée à une vente
                'montant_recus' => $validatedData['montant_recus'],
                'date_payement' => $validatedData['date_payement'],
            ]);

            return redirect()->route('payements.index')->with('success', 'Paiement créé avec succès.');
        } else {
            return redirect()->back()->with('error', 'Le montant reçu est inférieur au montant de la dette.');
        }
    }

    // Envoyer un e-mail à l'administrateur avec les détails du paiement
    public function show($id)
    {
        $payement = Payement::findOrFail($id);
        return view('admin.payements.show', compact('payement'));
    }

    public function edit($id)
    {
        $payement = Payement::findOrFail($id);
        return view('admin.payements.edit', compact('payement'));
    }


    // Mettre à jour un paiement
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'paysan_id' => 'required|exists:paysans,id',
            'dette_id' => 'required|exists:dettes,id',
            'vente_id' => 'required|exists:ventes,id',
            'montant_recus' => 'required|numeric|min:0',
            'date_payement' => 'required|date',
        ]);

        $payement = Payement::findOrFail($id);

        // Récupérer le paysan associé au paiement
        $paysan = $payement->paysan;

        // Récupérer le montant de la dette associée au paiement
        $dette = $payement->dette;

        // Restaurer le montant de la dette précédente du paysan
        $paysan->solde += $dette->montant;
        $paysan->save();

        // Vérifier si le montant de la dette est inférieur ou égal au montant reçu
        if ($dette->montant <= $validatedData['montant_recus']) {
            // Soustraire le nouveau montant de la dette au solde du paysan
            $paysan->solde -= $validatedData['montant_recus'];
            $paysan->save();

            // Mettre à jour le paiement
            $payement->update($validatedData);

            return redirect()->route('admin.payements.index')->with('success', 'Paiement mis à jour avec succès.');
        } else {
            // Restaurer le montant de la dette précédente du paysan
            $paysan->solde -= $validatedData['montant_recus'];
            $paysan->save();

            return redirect()->back()->with('error', 'Le montant reçu est inférieur au montant de la dette.');
        }
    }

    // Supprimer un paiement
    public function destroy($id)
    {
        $payement = Payement::findOrFail($id);

        // Restaurer le montant de la dette du paysan
        $paysan = $payement->paysan;
        $paysan->solde += $payement->dette->montant;
        $paysan->save();

        $payement->delete();

        return redirect()->route('admin.payements.index')->with('success', 'Paiement supprimé avec succès.');
    }
}
