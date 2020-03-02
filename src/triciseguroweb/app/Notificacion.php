<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notificacions';

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
    protected $fillable = ['tipo', 'mensaje', 'origen', 'destino'];

    public function origen()
    {
        return $this->belongsTo('App\Models\Persona');
    }
    public function destino()
    {
        return $this->belongsTo('App\Models\Persona');
    }
    
}
