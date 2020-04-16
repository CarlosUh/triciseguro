<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxista extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'taxistas';

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
    protected $fillable = ['none'];

   /* public function documentos()
    {
        return $this->HasMany('App\Documento');
}*/
    public function quejas()
    {
        return $this->HasMany('App\Queja');
    }
    public function mensajes()
    {
        return $this->HasMany('App\Models\Mensaje');
    }
    public function calificaciones()
    {
        return $this->HasMany('App\Models\Calificacion');
    }
    public function mototaxis()
    {
        return $this->HasMany('App\Models\Mototaxi');
    }
    public function persona()
    {
        return $this->morphOne('App\Persona', 'personable');
    }
    public function documento()
    {
        return $this->morphOne('App\Documento', 'documentable');
    }

}
