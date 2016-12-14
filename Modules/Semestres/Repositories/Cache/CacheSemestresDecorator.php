<?php namespace Modules\Semestres\Repositories\Cache;

use Modules\Semestres\Repositories\SemestresRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheSemestresDecorator extends BaseCacheDecorator implements SemestresRepository
{
    public function __construct(SemestresRepository $semestres)
    {
        parent::__construct();
        $this->entityName = 'semestres.semestres';
        $this->repository = $semestres;
    }
}
