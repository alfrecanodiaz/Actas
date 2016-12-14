<?php namespace Modules\Alumnos\Repositories\Cache;

use Modules\Alumnos\Repositories\InscripcionesRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheInscripcionesDecorator extends BaseCacheDecorator implements InscripcionesRepository
{
    public function __construct(InscripcionesRepository $inscripciones)
    {
        parent::__construct();
        $this->entityName = 'alumnos.inscripciones';
        $this->repository = $inscripciones;
    }
}
