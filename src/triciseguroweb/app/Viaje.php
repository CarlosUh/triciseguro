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
    protected $fillable = ['solicitud_id'];

    public function solicitud()
    {
        return $this->hasOne('App\Models\Solicitud');
    }
    
}
