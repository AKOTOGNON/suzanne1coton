<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
         // Récupérer tous les départements de la base de données
        $departements = Departement::all();
        return view('select_departement', compact('departements'));
    }

    public function getCommunes($departementId)// Méthode pour récupérer les communes
    {
           // Filtrer les communes en fonction de l'ID de département fourni
        $communes = Commune::where('departement_id', $departementId)->get();
        // Renvoyer une réponse JSON contenant les communes
        return response()->json(['communes' => $communes]);
    }
}
