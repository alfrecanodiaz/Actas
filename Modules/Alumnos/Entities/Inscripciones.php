<?php namespace Modules\Alumnos\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Inscripciones extends Model
{
    use Translatable;

    protected $table = 'alumnos__inscripciones';
    public $translatedAttributes = [];
    protected $fillable = ['curso_id','alumno_id','semestre_id','convocatoria_id','turno_id','seccion_id'];
}
