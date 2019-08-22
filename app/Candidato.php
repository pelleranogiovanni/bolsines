<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = ['candidato', 'lista', 'mesa_id', 'candidato_id'];

    public function mesas(){
        return $this->belongsToMany('App\Mesa', 'candidato_mesa')->withPivot('candidato_id', 'votos');
    }
}
