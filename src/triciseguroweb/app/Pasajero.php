<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pasajeros';

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
    protected $fillable = ['nombre', 'contacto_id', 'solicitud_id'];

    public function contacto()
    {
        return $this->belongsTo('App\Contacto');
    }
    public function solicitud()
    {
        return $this->belongsTo('App\Solicitud');
    }
    
}
