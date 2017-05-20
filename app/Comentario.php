<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{

    protected $table = "comentario";
    protected $fillable = ['descripcion','user','sitio_id'];

//    public function User(){
//        return $this->belongsTo('App\User');
//    }
    public function Sitio(){
        return $this->belongsTo('App\Sitio');
    }
}
