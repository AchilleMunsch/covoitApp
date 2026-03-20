<?php
namespace App\Http\Controllers;
use App\Models\Voiture;

class VehiculeController extends Controller
{

    public function show($id)
    {
        $vehicule = Voiture::with('employe')->findOrFail($id);

        return view('vehicules.show', compact('vehicule'));
    }

}