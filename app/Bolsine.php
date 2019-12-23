<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bolsine extends Model
{
    protected $fillable = [
        'apellido',
        'nombre',
        'dni',
        'box'
    ];


    //query scope
    public function scopeDni($query, $dni)
    {
        if ($dni) {
            return $query->where('dni', 'LIKE', '%' . $dni . '%');
        }
    }

    public function scopeApellido($query, $apellido)
    {
        if ($apellido) {
            return $query->where('apellido', 'LIKE', '%' . $apellido . '%')
                ->orWhere('nombre', 'LIKE', '%' . $apellido . '%');
        }
    }
}
