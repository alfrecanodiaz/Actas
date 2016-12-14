<?php namespace Modules\Semestres\Entities;

use Illuminate\Database\Eloquent\Model;

class ConvocatoriasTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'semestres__convocatorias_translations';
}
