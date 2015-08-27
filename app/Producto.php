<?php

namespace ten;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    public function registros()
    {
        return $this->belongsToMany('ten\Registro', 'registro_producto', 'producto_id', 'registro_id');
    }


}
