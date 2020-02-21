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
    protected $fillable = ['credencial_id', 'cuota_id', 'licencia_id', 'comprobante_pago_id'];

    public function credencial()
    {
        return $this->belongsTo('App\Models\Credencial');
    }
    public function cuota()
    {
        return $this->belongsTo('App\Models\Cuota');
    }
    public function licencia()
    {
        return $this->belongsTo('App\Models\Licencia');
    }
    public function comprobante_pago()
    {
        return $this->belongsTo('App\Models\Comprobante_Pago');
    }
    
}
