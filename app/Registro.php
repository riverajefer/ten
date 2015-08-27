<?php

namespace ten;

use ten\Sector;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registros';

    public function sector()
    {
    	return $this->belongsTo('ten\Sector', 'sector_id');
    }

    public function plan()
    {
    	return $this->belongsTo('ten\Plan', 'plan_id');
    }

    public function productos()
    {
        return $this->belongsToMany('ten\Producto', 'registro_producto', 'registro_id', 'producto_id' );
    }

}

