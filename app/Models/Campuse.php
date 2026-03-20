<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campuse extends Model
{
    protected $fillable=[
        'description',
        'adresse',
        'type'
    ];
    
    public function TrajetsDepart(){
        return $this->hasMany(Campuse::class, 'id_campuse_depart');
    }

    public function TrajetsArrivee(){
        return $this->hasMany(Campuse::class, 'id_campuse_arrivee');
    }

    public function employes(){
        return $this->belongToMany(Employe::class, 'frequente','id_campuse','id_employe');
    }
}
