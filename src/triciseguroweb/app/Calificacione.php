<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'calificaciones';

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
    protected $fillable = ['taxista', 'servicio', 'calificacion', 'taxista_id'];

    public function taxista_id()
    {
        return $this->belongsTo('App\Models\Taxista');
    }
    
}
