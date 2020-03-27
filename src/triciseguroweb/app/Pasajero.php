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
    protected $fillable = ['promocion_id'];

    public function contactos()
    {
        return $this->hasMany('App\Contacto');
    }
    public function promocion()
    {
        return $this->belongsTo('App\Promocion');
    }
    public function quejas()
    {
        return $this->HasMany('App\Queja');
    }

    public function persona()
    {
        return $this->morphOne('App\Persona', 'personable');
    }
}
