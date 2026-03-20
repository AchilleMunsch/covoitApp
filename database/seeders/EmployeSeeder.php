<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employe;

class EmployeSeeder extends Seeder
{
    public function run(): void
    {
        Employe::create(['nom' => 'Dupont',  'prenom' => 'Jean',   'email' => 'jean.dupont@email.com']);
        Employe::create(['nom' => 'Martin',  'prenom' => 'Sophie', 'email' => 'sophie.martin@email.com']);
        Employe::create(['nom' => 'Durand',  'prenom' => 'Pierre', 'email' => 'pierre.durand@email.com']);
    }
}