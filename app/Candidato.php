<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = ['candidato', 'lista', 'mesa_id', 'candidato_id', 'categoria_id'];

    public function mesas(){
        return $this->belongsToMany('App\Mesa', 'candidato_mesa')->withPivot('candidato_id', 'votos');
    }

    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }

    //mandar los candidatos que coincidan con la categoria que recibe por parámetro
    public static function candidatos($id){
    	return Candidato::where('categoria_id','=',$id)
    	->get();
    }
}
