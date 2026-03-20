<?php
// app/Http/Middleware/CheckEmployeHasVoiture.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Employe;

class CheckEmployeHasVoiture
{
    public function handle(Request $request, Closure $next)
    {
        $employe = Employe::findOrFail($request->route('employe'));

        if ($employe->voitures()->count() === 0) {
            return redirect()->route('voitures.create.for.employe', $employe->id);
        }

        return $next($request);
    }
}