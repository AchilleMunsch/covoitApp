<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable = [
        'date_time_depart',
        'date_time_arrivee'
    ];
    public function campusesArr(){
        return $this->belongsToMany(Campuse::class, 'id_campuse_arrivee');
    }

    public function campusesDep(){
        return $this->belongsToMany(Campuse::class, 'id_campuse_depart');
    }

    public function voiture(){
        return $this->belongsTo(Voiture::class, 'id_voiture');
    }

    public function employe(){
        return $this->belongsTo(Employe::class, 'participe','id_trajet','id_employe')->withPivot('date_inscription');
    }


}
