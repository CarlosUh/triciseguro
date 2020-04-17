<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credencial extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'credencials';

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
    protected $fillable = ['nombre', 'matricula', 'vigencia'];
    
    public function documento()
    {
        return $this->morphOne('App\Documento', 'documentable');
    }

    
}
