<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $fillable = [
        'modele',
        'nb_places'
    ];
    public function trajets(){
        return $this->hasMany(Trajet::class, 'trajet_id');
    }
    public function employe(){
        return $this->belongsTo(Employe::class, 'id');
    }
}
