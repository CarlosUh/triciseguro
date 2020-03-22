<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rutas';

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
    protected $fillable = ['orien', 'destino'];

    public function ubicaciones()
    {
        return $this->hasMany('App\Models\Ubicacion');
    }
    
}
