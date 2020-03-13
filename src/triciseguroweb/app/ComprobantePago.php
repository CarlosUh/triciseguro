<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComprobantePago extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comprobante_pagos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad', 'descripcion', 'documento_id'];

    public function documento()
    {
        return $this->hasOne('App\Models\Documento');
    }
    
}
