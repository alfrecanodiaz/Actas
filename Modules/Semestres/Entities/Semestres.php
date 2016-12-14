<?php namespace Modules\Semestres\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Semestres extends Model
{
    use Translatable;

    protected $table = 'semestres__semestres';
    public $translatedAttributes = [];
    protected $fillable = ['semestre','year'];

    public function cursos()
    {
    	return $this->hasOne('Modules\Cursos\Entities\Cursos');
    }
}
