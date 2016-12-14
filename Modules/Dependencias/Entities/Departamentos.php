<?php namespace Modules\Dependencias\Entities;

//use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    //use Translatable;

    protected $table = 'dependencias__departamentos';
    public $translatedAttributes = [];
    protected $fillable = ['departamento'];

    public function secciones()
    {
    	return $this->hasOne('Modules\Dependencias\Entities\Secciones');
    }
}
