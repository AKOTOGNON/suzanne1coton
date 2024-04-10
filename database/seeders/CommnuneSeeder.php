<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommnuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemple de données pour les communes
        $communes = [
            ['ouesse' => 'ouesse', 'departement_id' => 1],
            ['bohicon' => 'bohicon', 'departement_id' => 2],
            // Ajoutez d'autres communes selon vos besoins
        ];

        // Insérer les données dans la table
        foreach ($communes as $communeData) {
            // Vérifiez si la valeur de 'nom' est non NULL avant d'insérer
            if ($communeData['nom'] !== null) {
                DB::table('communes')->insert($communeData);
            }
        }
    }
}
