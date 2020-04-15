<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documentos';

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
    protected $fillable = ['nombre', 'apellido', 'curp', 'fecha', 'taxista_id'];

    public function taxista()
    {
        return $this->belongsTo('App\Models\Taxista');
    }
    public function comprobantepago()
    {
        return $this->hasOne('App\Models\ComprobantePago');
    }
    public function credencial()
    {
        return $this->hasOne('App\Models\Credencial');
    }
    public function licencia()
    {
        return $this->hasOne('App\Models\Licencia');
    }
     public function documentable()
    {
        return $this->morphTo();
    }
    
}
