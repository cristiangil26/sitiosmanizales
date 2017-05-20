<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitio extends Model
{
   protected $table = "sitios";
    protected $fillable = ['nombre','direccion','latitud','longitud','telefono','correo','paginaweb','tipo'];

    public function comentarios(){
        return $this->hasMany('App\Comentario');
    }
}
