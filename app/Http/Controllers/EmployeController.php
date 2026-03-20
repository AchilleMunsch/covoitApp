<?php
namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;



class EmployeController extends Controller
{

    public function index()
    {
        $employes = Employe::all();
        return view('employes.index', compact('employes'));
    }

    public function show($id)
    {
        $employe = Employe::with('vehicules')->findOrFail($id);
        return view('employes.show', compact('employe'));
    }

    public function verifier(Request $request, $id)
    {
        $employe = Employe::with('vehicules')->findOrFail($id);

        $existe = $employe->vehicules()
            ->where('modele', $request->modele)
            ->exists();

        $resultat = $existe ? "Yes" : "No";

        return view('employes.show', compact('employe','resultat'));
    }

}