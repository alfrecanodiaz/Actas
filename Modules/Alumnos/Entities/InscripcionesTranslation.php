<?php namespace Modules\Alumnos\Entities;

use Illuminate\Database\Eloquent\Model;

class InscripcionesTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'alumnos__inscripciones_translations';
}
