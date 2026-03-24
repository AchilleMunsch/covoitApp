<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

#[OA\Info(title: "CovoitApp API", version: "1.0.0")]
#[OA\Server(url: "http://lakartxela.iutbayonne.univ-pau.fr/~amunsch002/covoitApp-api/public")]
class EmployeController extends Controller
{
    #[OA\Get(
        path: "/api/employes",
        operationId: "getEmployes",
        summary: "Liste tous les employés",
        tags: ["Employés"],
        responses: [new OA\Response(response: 200, description: "OK")]
    )]
    public function index()
    {
        return response()->json(Employe::with('vehicules')->get());
    }

    #[OA\Get(
        path: "/api/employes/{id}",
        operationId: "getEmploye",
        summary: "Détail d'un employé",
        tags: ["Employés"],
        parameters: [new OA\Parameter(name: "id", in: "path", required: true, schema: new OA\Schema(type: "integer"))],
        responses: [
            new OA\Response(response: 200, description: "OK"),
            new OA\Response(response: 404, description: "Non trouvé")
        ]
    )]
    public function show(string $id)
    {
        $employe = Employe::with('vehicules')->findOrFail($id);
        return response()->json($employe);
    }

    #[OA\Post(
        path: "/api/employes",
        operationId: "createEmploye",
        summary: "Créer un employé",
        tags: ["Employés"],
        requestBody: new OA\RequestBody(
            content: new OA\JsonContent(
                required: ["nom", "prenom", "email"],
                properties: [
                    new OA\Property(property: "nom", type: "string"),
                    new OA\Property(property: "prenom", type: "string"),
                    new OA\Property(property: "email", type: "string"),
                ]
            )
        ),
        responses: [new OA\Response(response: 201, description: "Créé")]
    )]
    public function store(Request $request)
    {
        $employe = Employe::create($request->validate([
            'nom'    => 'required|string',
            'prenom' => 'required|string',
            'email'  => 'required|email|unique:employes',
        ]));
        return response()->json($employe, 201);
    }

    #[OA\Put(
        path: "/api/employes/{id}",
        operationId: "updateEmploye",
        summary: "Modifier un employé",
        tags: ["Employés"],
        parameters: [new OA\Parameter(name: "id", in: "path", required: true, schema: new OA\Schema(type: "integer"))],
        requestBody: new OA\RequestBody(
            content: new OA\JsonContent(
                properties: [
                    new OA\Property(property: "nom", type: "string"),
                    new OA\Property(property: "prenom", type: "string"),
                    new OA\Property(property: "email", type: "string"),
                ]
            )
        ),
        responses: [new OA\Response(response: 200, description: "OK")]
    )]
    public function update(Request $request, string $id)
    {
        $employe = Employe::findOrFail($id);
        $employe->update($request->validate([
            'nom'    => 'string',
            'prenom' => 'string',
            'email'  => 'email|unique:employes,email,' . $id,
        ]));
        return response()->json($employe);
    }

    #[OA\Delete(
        path: "/api/employes/{id}",
        operationId: "deleteEmploye",
        summary: "Supprimer un employé",
        tags: ["Employés"],
        parameters: [new OA\Parameter(name: "id", in: "path", required: true, schema: new OA\Schema(type: "integer"))],
        responses: [new OA\Response(response: 200, description: "Supprimé")]
    )]
    public function destroy(string $id)
    {
        Employe::findOrFail($id)->delete();
        return response()->json(['message' => 'Employé supprimé'], 200);
    }
}