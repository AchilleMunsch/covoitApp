<?php
// app/Http/Middleware/CheckEmployeHasCampus.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Employe;

class CheckEmployeHasCampus
{
    public function handle(Request $request, Closure $next)
    {
        $employe = Employe::findOrFail($request->route('employe'));

        if ($employe->campus()->count() === 0) {
            abort(403, "Cet employé n'appartient à aucun campus.");
        }

        return $next($request);
    }
}