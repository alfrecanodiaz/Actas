<?php namespace Modules\Dependencias\Repositories\Cache;

use Modules\Dependencias\Repositories\SeccionesRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheSeccionesDecorator extends BaseCacheDecorator implements SeccionesRepository
{
    public function __construct(SeccionesRepository $secciones)
    {
        parent::__construct();
        $this->entityName = 'dependencias.secciones';
        $this->repository = $secciones;
    }
}
