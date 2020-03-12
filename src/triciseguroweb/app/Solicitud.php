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
    protected $fillable = ['promocion_id', 'ruta_id', 'calificacion_id', 'servicio_id'];

    public function promociono_id()
    {
        return $this->hasMany('App\Promocion');
    }
    public function ruta_id()
    {
        return $this->hasMany('App\Ruta');
    }
    public function calificacion_id()
    {
        return $this->hasMany('App\Calificacion');
    }
    public function servicio_id()
    {
        return $this->hasMany('App\Servicio');
    }
    
}
