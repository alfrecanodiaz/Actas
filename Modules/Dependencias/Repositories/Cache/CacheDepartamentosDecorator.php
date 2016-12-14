<?php namespace Modules\Dependencias\Repositories\Cache;

use Modules\Dependencias\Repositories\DepartamentosRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheDepartamentosDecorator extends BaseCacheDecorator implements DepartamentosRepository
{
    public function __construct(DepartamentosRepository $departamentos)
    {
        parent::__construct();
        $this->entityName = 'dependencias.departamentos';
        $this->repository = $departamentos;
    }
}
