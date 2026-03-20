<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participe extends Model
{
    protected $fillable = [
        'id_employe',
        'id_trajet',
        'date_inscription'
    ];
}
