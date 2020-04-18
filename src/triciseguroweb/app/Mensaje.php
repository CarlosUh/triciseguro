<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mensajes';

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
    protected $fillable = ['mensaje', 'taxista_id', 'solicitud_id'];

    public function taxista()
    {
        return $this->belongsTo('App\Models\Taxista');
    }
    public function solicitud()
    {
        return $this->belongsTo('App\Models\Solicitud');
    }
    
}
