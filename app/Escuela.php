<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $fillable = ['escuela', 'domicilio'];

    public function mesas(){
        return $this->belongsToMany('App\Mesa');
    }
}
