<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'placas';

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
    protected $fillable = ['nombre', 'color', 'tamanio', 'taxi_id'];

    public function taxi()
    {
        return $this->belongsTo('App\Models\Taxi');
    }
    
}
