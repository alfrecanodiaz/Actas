<?php namespace Modules\Dependencias\Entities;

use Illuminate\Database\Eloquent\Model;

class TurnosTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'dependencias__turnos_translations';
}
