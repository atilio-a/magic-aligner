<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'responsable',
        'finca_id',
    ];

    public function finca()
    {
        return $this->belongsTo(Finca::class, 'finca_id');
    }
}
