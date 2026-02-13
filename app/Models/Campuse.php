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
    public function trajets(){
        return $this->hasMany(Trajet::class, 'id_value');
    }
}
