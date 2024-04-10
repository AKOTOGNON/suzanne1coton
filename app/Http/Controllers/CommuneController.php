<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    public function getCommunes(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'departement_id' => 'required|exists:departements,id',
        ]);

        // Récupérer l'ID du département à partir de la requête
        $departement_id= $request->input('departement_id');

        // Récupérer les communes associées à ce département
        $communes = Commune::where('departement_id', $departement_id)->get();

        // Générer les options HTML pour les communes
        $options = '';
        foreach ($communes as $commune) {
            $options .= '<option value="' . $commune->id . '">' . $commune->nom . '</option>';
        }

        // Retourner les options générées au format JSON
        return response()->json($options);
    }
}
