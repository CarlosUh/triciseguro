<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alertum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'alertas';

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
    protected $fillable = ['descripcion', 'fecha', 'pasajero_id', 'viaje_id'];

    public function pasajero()
    {
        return $this->belongsTo('App\Models\Pasajero');
    }
    public function viaje()
    {
        return $this->belongsTo('App\Models\Viaje');
    }
    
}
