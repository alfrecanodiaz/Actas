<?php namespace Modules\Profesores\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    use Translatable;

    protected $table = 'profesores__profesores';
    public $translatedAttributes = [];
    protected $fillable = ['nombre'];

    public function cursos()
    {
    	return $this->hasOne('Modules\Cursos\Entities\Cursos');
    }
}
