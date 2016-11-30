<?php namespace Modules\Materias\Repositories\Cache;

use Modules\Materias\Repositories\MateriasRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheMateriasDecorator extends BaseCacheDecorator implements MateriasRepository
{
    public function __construct(MateriasRepository $materias)
    {
        parent::__construct();
        $this->entityName = 'materias.materias';
        $this->repository = $materias;
    }
}
