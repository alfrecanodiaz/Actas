<?php namespace Modules\Cursos\Entities;

use Illuminate\Database\Eloquent\Model;

class CursosTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'cursos__cursos_translations';
}
