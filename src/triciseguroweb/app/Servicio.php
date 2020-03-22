<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD:src/triciseguroweb/app/Servicio.php
class Servicio extends Model
=======
class Taxistum extends Model
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/app/taxistum.php
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servicios';

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
<<<<<<< HEAD:src/triciseguroweb/app/Servicio.php
    protected $fillable = ['tipo', 'precio'];
=======
    protected $fillable = ['nombre', 'persona_id', 'quejas', 'ruta', 'mototaxi'];
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/app/taxistum.php

    public function persona()
    {
        return $this->HasOne('App\Models\Persona');
    }
    
}
