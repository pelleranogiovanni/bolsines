<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['numero', 'escuela', 'mesa_id', 'candidato_id', 'escuela_id'];

    public function candidatos(){
        return $this->belongsToMany('App\Candidato', 'candidato_mesa')->withPivot('mesa_id', 'votos');
    }

    public function escuela(){
        return $this->belongsTo('App\Escuela');
    }

    //mandar las mesas que coincidan con la escuela que recibe por parámetro
    public static function mesas($id){
    	return Mesa::where('escuela_id','=',$id)
    	->get();
    }
}
