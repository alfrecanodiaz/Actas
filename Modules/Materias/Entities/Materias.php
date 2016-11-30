<?php namespace Modules\Materias\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use Translatable;

    protected $table = 'materias__materias';
    public $translatedAttributes = [];
    protected $fillable = ['nombre'];

    public function cursos()
    {
    	return $this->hasOne('Modules\Cursos\Entities\Cursos');
    }
}
