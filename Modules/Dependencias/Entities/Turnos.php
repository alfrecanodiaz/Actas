<?php namespace Modules\Dependencias\Entities;

//use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Turnos extends Model
{
    //use Translatable;

    protected $table = 'dependencias__turnos';
    public $translatedAttributes = [];
    protected $fillable = ['turnos'];

    public function cursos()
    {
    	return $this->hasOne('Modules\Cursos\Entities\Cursos');
    }
}
