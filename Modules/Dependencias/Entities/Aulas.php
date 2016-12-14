<?php namespace Modules\Dependencias\Entities;

//use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Aulas extends Model
{
    //use Translatable;

    protected $table = 'dependencias__aulas';
    public $translatedAttributes = [];
    protected $fillable = ['aula'];

    public function cursos()
    {
    	return $this->hasOne('Modules\Cursos\Entities\Cursos');
    }
    
}
