<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'viajes';

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
    protected $fillable = ['comentario'];

    public function alertas()
    {
        return $this->hasMany('App\Alerta');
    }
    public function solicitud()
    {
        return $this->morphOne('App\Solicitud', 'solicitable');
    }

}
