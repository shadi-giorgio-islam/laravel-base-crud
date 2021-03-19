<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
      'modello', 'marca', 'colore', 'prezzo', 'motore'
    ];
}
