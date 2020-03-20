<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion_aplicada extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promocion_aplicadas';

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
    protected $fillable = ['promocion_id', 'solicitud_id'];

    public function promocion()
    {
        return $this->hasOne('App\Models\Promocion');
    }
    public function solicitud()
    {
        return $this->belongsTo('App\Models\Solicitud');
    }
    
}
