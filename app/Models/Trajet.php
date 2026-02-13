<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable = [
        'date_time_depart',
        'date_time_arrivee'
    ];
    public function Campuses(){
        
    }
}
