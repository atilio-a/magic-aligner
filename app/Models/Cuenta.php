<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $fillable = [
        'numero',
        'banco',
        'cbu',
        'alias',
        'descripcion',
        'dolar',
    ];
}
