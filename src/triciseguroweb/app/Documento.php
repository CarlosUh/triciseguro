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
    protected $fillable = ['credencial_id', 'licencia_id', 'comprobante_pago_id'];

    public function credencial()
    {
        return $this->hasMany('App\Models\Credencial', 'id');
    }
    public function licencia()
    {
        return $this->hasMany('App\Models\Licencia', 'id');
    }
    public function comprobante_pago()
    {
        return $this->hasMany('App\Models\comprobante_pago', 'id');
    }
    
}
