<?php namespace Modules\Semestres\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Convocatorias extends Model
{
    use Translatable;

    protected $table = 'semestres__convocatorias';
    public $translatedAttributes = [];
    protected $fillable = ['convocatoria','year'];

    public function cursos()
    {
    	return $this->hasOne('Modules\Cursos\Entities\Cursos');
    }
}
