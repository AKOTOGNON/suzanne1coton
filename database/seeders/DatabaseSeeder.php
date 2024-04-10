<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Commune;
use App\Models\Departement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $departements = ["Zou", "Collines", "Mono", "Couffo", "Atacora", "Donga", "Alibora", "Borgou", "Ouémé", "Plateau", 'Atlantique', 'Littoral'];
        foreach ($departements as $departement) {
            if (!Departement::where('nom', $departement)->exists()) {
                Departement::create([
                    'nom' => $departement
                ]);
            }
        }


        $communes_collines = ["Ouesse", "Savè", "Glazoué", "Savalou", "Bantè", "Dassa-zoumè"];
        $communes_zou = ["Bohicon", "Agbanhizoun", "Abomey", "Djidja", "Cove", "Ouinhi", "Zangnanado"];

        foreach ($communes_collines as $commune) {
            if (!Commune::where('nom', $commune)->exists()) {
                $departement = Departement::where('nom', 'Collines')->first();
                Commune::create([
                    'nom' => $commune,
                    'departement_id' => $departement->id
                ]);
            }
        }

        foreach ($communes_zou as $commune) {
            if (!Commune::where('nom', $commune)->exists()) {
                $departement = Departement::where('nom', 'Zou')->first();
                Commune::create([
                    'nom' => $commune,
                    'departement_id' => $departement->id
                ]);
            }
        }
    }
}
