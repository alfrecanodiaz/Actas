<?php namespace Modules\Dependencias\Entities;

//use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Secciones extends Model
{
    //use Translatable;

    protected $table = 'dependencias__secciones';
    public $translatedAttributes = [];
    protected $fillable = ['seccion','departamento_id'];

    public function departamentos()
    {
        return $this->belongsTo('Modules\Dependencias\Entities\Departamentos','departamento_id');
    }

    public function cursos()
    {
    	return $this->hasOne('Modules\Cursos\Entities\Cursos');
    }
}
