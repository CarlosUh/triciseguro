<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
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
    protected $fillable = ['origen_id', 'destino_id'];

    public function origen()
    {
        return $this->belongsTo('App\Ubicacion','origen_id');
    }
    public function destino()
    {
        return $this->belongsTo('App\Ubicacion','destino_id');
    }

}
