<?php namespace Modules\Alumnos\Repositories\Cache;

use Modules\Alumnos\Repositories\AlumnosRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheAlumnosDecorator extends BaseCacheDecorator implements AlumnosRepository
{
    public function __construct(AlumnosRepository $alumnos)
    {
        parent::__construct();
        $this->entityName = 'alumnos.alumnos';
        $this->repository = $alumnos;
    }
}
