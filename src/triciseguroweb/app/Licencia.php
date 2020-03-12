<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licencium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'licencias';

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
    protected $fillable = ['nacionalidad', 'fecha_expedicion', 'fecha_vencimiento', 'vigencia'];

    public function documento()
    {
        return $this->hasOne('App\Models\Documento');
    }
    
}
