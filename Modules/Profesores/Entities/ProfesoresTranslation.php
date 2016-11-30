<?php namespace Modules\Profesores\Entities;

use Illuminate\Database\Eloquent\Model;

class ProfesoresTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'profesores__profesores_translations';
}
