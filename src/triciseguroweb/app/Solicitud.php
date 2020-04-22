<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'solicitudes';

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
    protected $fillable = ['pasajero_id', 'taxista_id', 'ruta_id'];

    public function ruta()
    {
        return $this->belongsTo('App\Ruta');
    }
    public function calificacion()
    {
        return $this->hasOne('App\Calificacion');
    }
    public function mensajes()
    {
        return $this->hasMany('App\Mensaje');
    }
    public function taxista()
    {
        return $this->belongsTo('App\Taxista');
    }
    public function pasajero()
    {
        return $this->belongsTo('App\Pasajero');
    }
    public function solicitable()
    {
        return $this->morphTo();
    }
    public function promocionable()
    {
        return $this->hasMany('App\Promocion_aplicada');
    }
}
