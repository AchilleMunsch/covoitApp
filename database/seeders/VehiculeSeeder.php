<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Voiture;

class VehiculeSeeder extends Seeder
{
    public function run(): void
    {
        Voiture::create([
            'modele'      => 'Clio',
            'nb_places'   => 5,
            'id_employe'  => 1
        ]);
        
        Voiture::create([
            'modele'      => '208',
            'nb_places'   => 5,
            'id_employe'  => 1
        ]);
        
        Voiture::create([
            'modele'      => 'Golf',
            'nb_places'   => 5,
            'id_employe'  => 2
        ]);
    }
}