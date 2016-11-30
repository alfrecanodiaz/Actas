<?php namespace Modules\Profesores\Repositories\Cache;

use Modules\Profesores\Repositories\ProfesoresRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProfesoresDecorator extends BaseCacheDecorator implements ProfesoresRepository
{
    public function __construct(ProfesoresRepository $profesores)
    {
        parent::__construct();
        $this->entityName = 'profesores.profesores';
        $this->repository = $profesores;
    }
}
