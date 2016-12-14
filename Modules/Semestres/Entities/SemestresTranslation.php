<?php namespace Modules\Semestres\Entities;

use Illuminate\Database\Eloquent\Model;

class SemestresTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'semestres__semestres_translations';
}
