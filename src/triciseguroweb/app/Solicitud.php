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
    protected $table = 'solicituds';

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

    public function promociones()
    {
        return $this->hasMany('App\Promocion');
    }
    public function ruta()
    {
        return $this->hasOne('App\Ruta');
    }
    public function calificacion()
    {
        return $this->hasOne('App\Calificacion');
    }
    public function mensaje()
    {
        return $this->hasMany('App\Mensaje');
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
        return $this->hasMany('App\Servicio');
    }
    public function viaje()
    {
        return $this->hasOne('App\Viaje');
    }
    
}
