<?php namespace Modules\Dependencias\Entities;

use Illuminate\Database\Eloquent\Model;

class DepartamentosTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'dependencias__departamentos_translations';
}
