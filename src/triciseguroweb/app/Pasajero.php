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
    protected $fillable = ['nombre', 'persona_id', 'promocion_id'];

    public function contactos()
    {
        return $this->hasMany('App\Contacto');
    }
    public function promociones()
    {
        return $this->hasOne('App\Promocion');
    }
    public function personas()
    {
        return $this->hasOne('App\Persona');
    }
    
}
