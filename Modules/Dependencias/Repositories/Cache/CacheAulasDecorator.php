<?php namespace Modules\Dependencias\Repositories\Cache;

use Modules\Dependencias\Repositories\AulasRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheAulasDecorator extends BaseCacheDecorator implements AulasRepository
{
    public function __construct(AulasRepository $aulas)
    {
        parent::__construct();
        $this->entityName = 'dependencias.aulas';
        $this->repository = $aulas;
    }
}
