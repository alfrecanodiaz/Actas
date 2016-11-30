<?php namespace Modules\Materias\Entities;

use Illuminate\Database\Eloquent\Model;

class MateriasTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'materias__materias_translations';
}
