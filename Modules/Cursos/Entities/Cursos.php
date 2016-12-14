<?php namespace Modules\Cursos\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;


class Cursos extends Model
{
    use Translatable;

    protected $table = 'cursos__cursos';
    public $translatedAttributes = [];
    protected $fillable = ['temporada','materia_id','profesor_id','aula_id','turno_id','seccion_id','convocatoria_id','semestre_id'];

    public function materias()
    {
        return $this->belongsTo('Modules\Materias\Entities\Materias','materia_id');
    }

    public function profesores()
    {
        return $this->belongsTo('Modules\Profesores\Entities\Profesores','profesor_id');
    }

    public function aulas()
    {
        return $this->belongsTo('Modules\Dependencias\Entities\Aulas','aula_id');
    }

    public function secciones()
    {
        return $this->belongsTo('Modules\Dependencias\Entities\Secciones','seccion_id');
    }

    public function turnos()
    {
        return $this->belongsTo('Modules\Dependencias\Entities\Turnos','turno_id');
    }

    public function convocatorias()
    {
        return $this->belongsTo('Modules\Semestres\Entities\Convocatorias','convocatoria_id');
    }

    public function semestres()
    {
        return $this->belongsTo('Modules\Semestres\Entities\Semestres','semestre_id');
    }
}
