<?php namespace Modules\Alumnos\Entities;

use Illuminate\Database\Eloquent\Model;

class AlumnosTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'alumnos__alumnos_translations';
}
