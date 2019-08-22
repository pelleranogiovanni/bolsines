<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['numero', 'escuela', 'mesa_id', 'candidato_id'];

    public function candidatos(){
        return $this->belongsToMany('App\Candidato', 'candidato_mesa')->withPivot('mesa_id', 'votos');
    }
}
