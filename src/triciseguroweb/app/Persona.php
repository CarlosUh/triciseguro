<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personas';

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
    protected $fillable = ['nombre', 'apellido', 'f_nacimiento', 'genero', 'direccion', 'telefono'];

    public function ubicaciones()
    {
        return $this->hasMany('App\Ubicacion');
    }

    public function personable()
    {
        return $this->morphTo();
    }

}
