<?php
// app/Http/Middleware/CheckVoiturePlaces.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Voiture;

class CheckVoiturePlaces
{
    public function handle(Request $request, Closure $next)
    {
        $voiture = Voiture::findOrFail($request->route('voiture'));

        if ($voiture->nb_places >= 8) {
            return redirect()
                ->back()
                ->with('error', 'Visualisation des bus en cours');
        }

        return $next($request);
    }
}