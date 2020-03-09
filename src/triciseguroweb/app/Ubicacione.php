<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ubicaciones';

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
    protected $fillable = ['nombre', 'latitude', 'longitud', 'description', 'persona_id'];

    public function persona()
    {
        return $this->belongsTo('App\Models\persona');
    }
    
}
