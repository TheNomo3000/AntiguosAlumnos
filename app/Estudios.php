<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudios extends Model
{
    protected $fillable = [
        'nombre',
        'abreviatura',
    ];
}
