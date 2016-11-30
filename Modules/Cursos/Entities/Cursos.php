<?php namespace Modules\Cursos\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;


class Cursos extends Model
{
    use Translatable;

    protected $table = 'cursos__cursos';
    public $translatedAttributes = [];
    protected $fillable = ['temporada','materia_id','profesor_id'];

    public function materias()
    {
        return $this->belongsTo('Modules\Materias\Entities\Materias','materia_id');
    }

    public function profesores()
    {
        return $this->belongsTo('Modules\Profesores\Entities\Profesores','profesor_id');
    }
}
