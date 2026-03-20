<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email'
    ];
    public function vehicules(){
        return $this->hasMany(Voiture::class, 'id');
    }

    public function trajets(){
        return $this->belongsToMany(Trajet::class, 'participe','id_employe','id_trajet')->withPivot('date_inscription');
    }

    public function campuses(){
        return $this->belongsToMany(Campuse::class, 'frequente','id_employe','id_campuse');
    }
}
