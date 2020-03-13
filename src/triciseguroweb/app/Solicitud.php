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
    protected $fillable = ['pasajero_id', 'ruta_id', 'calificacion_id', 'taxita_id'];

    public function ruta()
    {
        return $this->hasOne('App\Ruta');
    }
    public function calificacion()
    {
        return $this->hasOne('App\Calificacion');
    }
    public function mensajes()
    {
        return $this->belongsTo('App\Mensaje');
    }
    public function taxista()
    {
        return $this->hasOne('App\Taxista');
    }
    public function pasajero()
    {
        return $this->hasOne('App\Pasajero');
    }
    public function servicio()
    {
        return $this->belongsTo('App\Servicio');
    }
    public function viaje()
    {
        return $this->belongsTo('App\Viaje');
    }
    
}
