<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
    {
        return response()->json(Vehicule::with('employe')->get());
    }

    public function show(string $id)
    {
        $vehicule = Vehicule::with('employe')->findOrFail($id);
        return response()->json($vehicule);
    }

    public function store(Request $request)
    {
        $vehicule = Vehicule::create($request->validate([
            'modele'     => 'required|string',
            'nb_places'  => 'required|integer',
            'id_employe' => 'required|exists:employes,id',
        ]));
        return response()->json($vehicule, 201);
    }

    public function update(Request $request, string $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->update($request->validate([
            'modele'     => 'string',
            'nb_places'  => 'integer',
            'id_employe' => 'exists:employes,id',
        ]));
        return response()->json($vehicule);
    }

    public function destroy(string $id)
    {
        Vehicule::findOrFail($id)->delete();
        return response()->json(['message' => 'Véhicule supprimé'], 200);
    }
}