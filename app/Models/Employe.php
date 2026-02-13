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
    public function voitures(){
        return $this->hasMany(Voiture::class, 'id_value');
    }
}
