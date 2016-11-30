<?php namespace Modules\Alumnos\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use Translatable;

    protected $table = 'alumnos__alumnos';
    public $translatedAttributes = [];
    protected $fillable = [];
}
